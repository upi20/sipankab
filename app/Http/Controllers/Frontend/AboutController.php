<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tracker;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        Tracker::hit();

        $page_attr = [
            'navigation' => 'about',
            'title' => 'Tentang',
        ];

        $data = compact(
            'page_attr',
        );
        $data['compact'] = $data;
        return view('pages.frontend.about', $data);
    }
}
