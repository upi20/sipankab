<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calon;
use App\Models\CalonNilai;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class CalonNilaiController extends Controller
{
    private $validate_model = [
        'id' => ['required', 'integer'],
    ];

    public function index(Request $request)
    {
        $page_attr = adminBreadcumb(h_prefix());
        $kecamatans = Kecamatan::orderBy('nama')->get();

        $view = path_view('pages.admin.calon_nilai');
        $data = compact('page_attr', 'view', 'kecamatans');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function update(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            $model = Calon::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            // hapus semua nilai
            CalonNilai::where('calon_id', $model->id)->delete();

            // masukan nilai nya
            foreach ($request->nilais as $tahapan_id => $nilai) {
                $new_nilai = new CalonNilai();
                $new_nilai->tahapan_id = $tahapan_id;
                $new_nilai->calon_id = $model->id;
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

    public function find(Request $request)
    {
        $calon = Calon::findOrFail($request->id);
        return CalonNilai::getEdit($calon);
    }

    public function datatable(Request $request)
    {
        return CalonNilai::datatable($request);
    }
}
