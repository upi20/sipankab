<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use App\Models\Tracker;
use App\Models\Menu\Frontend as MenuFrontend;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    private $menuTitleKey = 'pendaftaran';
    private $validate_model = [
        'nama' => ['required', 'string'],
        'jenis_kelamin' => ['required', 'string'],
        'tanggal_lahir' => ['required', 'string'],
        'alamat' => ['required', 'string'],
        'no_telepon' => ['required', 'string'],
        'no_whatsapp' => ['nullable', 'string'],
    ];

    public function index(Request $request)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;
        Tracker::hit();
        $page_attr = [
            'title' => $routeTitle,
        ];

        $data = compact('page_attr', 'routeTitle');
        $data['compact'] = $data;
        return view('pages.frontend.pendaftaran', $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Pendaftaran();
            $model->nama = $request->nama;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->tanggal_lahir = $request->tanggal_lahir;
            $model->alamat = $request->alamat;
            $model->no_telepon = $request->no_telepon;
            $model->no_whatsapp = $request->no_whatsapp;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }
}
