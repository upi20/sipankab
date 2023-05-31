<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total_calon = Calon::count();

        $page_attr = adminBreadcumb(h_prefix(), addDashboard: false);

        $view = path_view('pages.admin.dashboard');
        $data = compact(
            'total_calon',
            'page_attr',
            'view',
        );
        $data['compact'] = $data;
        return view($view, $data);
    }
}
