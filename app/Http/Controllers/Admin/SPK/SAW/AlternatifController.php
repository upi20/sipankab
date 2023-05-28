<?php

namespace App\Http\Controllers\Admin\SPK\SAW;

use App\Http\Controllers\Controller;
use App\Models\SPK\SAW\Alternatif;
use App\Models\SPK\SAW\AlternatifNilai;
use App\Models\SPK\SAW\SAW;
use App\Models\SPK\SAW\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class AlternatifController extends Controller
{
    private $validate_model = [
        'spk_id' => ['required', 'integer'],
        'nama' => ['required', 'string'],
    ];

    public function index(Request $request, SAW $spk)
    {
        $page_attr = adminBreadcumb(h_prefix(min: 2), isChild: true);
        $page_attr = [
            'title' => 'Alternatif',
            'breadcrumbs' => $page_attr['breadcrumbs'],
            'navigation' => h_prefix(min: 2)
        ];

        $view = path_view('pages.admin.spk.saw.alternatif');
        $data = compact('page_attr', 'spk', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);
            DB::beginTransaction();

            // buat alternatif
            $model = new Alternatif();
            $model->spk_id = $request->spk_id;
            $model->nama = $request->nama;
            $model->save();

            // masukan nilai nya
            foreach ($request->nilais as $kriteria_id => $nilai) {
                $new_nilai = new AlternatifNilai();
                $new_nilai->kriteria_id = $kriteria_id;
                $new_nilai->alternatif_id = $model->id;
                $new_nilai->nilai = $nilai;
                $new_nilai->save();
            }

            DB::commit();
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
            DB::beginTransaction();
            $model = Alternatif::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->spk_id = $request->spk_id;
            $model->nama = $request->nama;
            $model->save();

            // hapus semua nilai
            AlternatifNilai::where('alternatif_id', $model->id)->delete();

            // masukan nilai nya
            foreach ($request->nilais as $kriteria_id => $nilai) {
                $new_nilai = new AlternatifNilai();
                $new_nilai->kriteria_id = $kriteria_id;
                $new_nilai->alternatif_id = $model->id;
                $new_nilai->nilai = $nilai;
                $new_nilai->save();
            }

            DB::commit();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Alternatif $model): mixed
    {
        try {
            $model->delete();
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
        $alternatif = Alternatif::findOrFail($request->id);

        return AlternatifNilai::getEdit($alternatif);
    }

    public function datatable(SAW $spk)
    {
        return AlternatifNilai::datatable($spk);
    }

    public function kriteria(SAW $spk)
    {
        try {
            $get = Kriteria::where('spk_id', $spk->id)->orderBy('kode')->get();
            return response()->json($get);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }
}
