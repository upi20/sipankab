<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {


        $kecamatan = Kecamatan::with(['calons'])->first();
        $kecamatan->wp();
        $kecamatan->saw();
        return $kecamatan;
    }
}
