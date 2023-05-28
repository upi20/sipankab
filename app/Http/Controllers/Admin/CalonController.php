<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calon;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class CalonController extends Controller
{
    private $validate_model = [
        'nomor_pendaftaran' => ['required', 'string', 'unique:' . Calon::tableName],
        'kecamatan_id' => ['required', 'string'],
        'nama' => ['required', 'string'],
        'jenis_kelamin' => ['required', 'string'],
        'tanggal_lahir' => ['required', 'string'],
        'nomor_telepon' => ['required', 'string'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Calon::datatable($request);
        }

        $kecamatans = Kecamatan::orderBy('nama')->get();

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.calon');
        $data = compact('page_attr', 'view', 'kecamatans');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Calon();
            $model->kecamatan_id = $request->kecamatan_id;
            $model->nama = $request->nama;
            $model->nomor_pendaftaran = $request->nomor_pendaftaran;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->tanggal_lahir = $request->tanggal_lahir;
            $model->nomor_telepon = $request->nomor_telepon;
            $model->save();
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
            $this->validate_model['nomor_pendaftaran'] = ['required', 'string', 'unique:' . Calon::tableName . ',nomor_pendaftaran,' . $request->id];

            $model = Calon::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->kecamatan_id = $request->kecamatan_id;
            $model->nama = $request->nama;
            $model->nomor_pendaftaran = $request->nomor_pendaftaran;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->tanggal_lahir = $request->tanggal_lahir;
            $model->nomor_telepon = $request->nomor_telepon;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Calon $model): mixed
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
        return Calon::findOrFail($request->id);
    }
}
