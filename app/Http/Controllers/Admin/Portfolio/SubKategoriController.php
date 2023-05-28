<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Helpers\Summernote;
use App\Http\Controllers\Controller;
use App\Models\Portfolio\Kategori;
use App\Models\Portfolio\SubKategori;
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class SubKategoriController extends Controller
{
    private $validate_model = [
        'urutan' => ['nullable', 'integer'],
        'nama' => ['required', 'string'],
        'keterangan' => ['nullable', 'string'],
        'kategori_id' => ['required', 'integer'],
        'judul' => ['nullable', 'string'],
        'sub_judul' => ['nullable', 'string'],
        'tampilkan_client' => ['required', 'string'],
        'tampilkan_testimoni' => ['required', 'string'],
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ];

    private $image_folder = SubKategori::image_folder;

    public function index(Request $request, Kategori $kategori)
    {

        if (request()->ajax()) {
            return SubKategori::datatable($request);
        }
        $page_attr = adminBreadcumb(h_prefix('kategori', 2), isChild: true);

        $page_attr = [
            'title' => 'Sub Kategori',
            'navigation' => h_prefix('kategori', 2),
            'breadcrumbs' => $page_attr['breadcrumbs']
        ];

        $image_folder = $this->image_folder;

        $view = path_view('pages.admin.portfolio.sub_kategori');
        $data = compact('page_attr', 'view', 'kategori', 'image_folder');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new SubKategori();

            $urutan = $request->urutan ?? ((SubKategori::where('kategori_id', $request->kategori_id)->max('urutan') ?? 0) + 1);
            $keterangan = Summernote::insert($request->keterangan ?? '<p></p>', $this->image_folder, 'keterangan');
            $foto = '';
            if ($image = $request->file('foto')) {
                $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move(public_path($this->image_folder), $foto);
            }
            $model->urutan = $urutan;
            $model->foto = $foto;
            $model->keterangan =  $keterangan->html;
            $model->nama = $request->nama;
            $model->kategori_id = $request->kategori_id;
            $model->judul = $request->judul;
            $model->sub_judul = $request->sub_judul;
            $model->tampilkan_client = $request->tampilkan_client;
            $model->tampilkan_testimoni = $request->tampilkan_testimoni;
            $model->save();
            Portfolio::clearCache();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {
            $model = SubKategori::findOrFail($request->id);

            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $urutan = $request->urutan ?? ((SubKategori::where('kategori_id', $request->kategori_id)->max('urutan') ?? 0) + 1);
            $keterangan = Summernote::update($request->keterangan, $this->image_folder, '', 'keterangan');

            // foto handle
            $foto = '';
            if ($image = $request->file('foto')) {
                $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move(public_path($this->image_folder), $foto);

                // delete foto
                if ($model->foto) {
                    $path = public_path("$this->image_folder/$model->foto");
                    delete_file($path);
                }
                // save foto
                $model->foto = $foto;
            }

            $model->urutan =  $urutan;
            $model->keterangan =  $keterangan->html;
            $model->nama = $request->nama;
            $model->kategori_id = $request->kategori_id;
            $model->judul = $request->judul;
            $model->sub_judul = $request->sub_judul;
            $model->tampilkan_client = $request->tampilkan_client;
            $model->tampilkan_testimoni = $request->tampilkan_testimoni;
            $model->save();
            Portfolio::clearCache();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(SubKategori $model): mixed
    {
        try {
            // cek folder
            Summernote::delete($model->keterangan);

            // delete foto
            if ($model->foto) {
                $path = public_path("$this->image_folder/$model->foto");
                delete_file($path);
            }

            $model->delete();
            Portfolio::clearCache();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        return SubKategori::findOrFail($request->id);
    }
}
