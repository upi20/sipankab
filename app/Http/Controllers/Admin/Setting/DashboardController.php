<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Helpers\Summernote;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $page_attr = adminBreadcumb(h_prefix());

        $view = path_view('pages.admin.setting.dashboard');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function update(Request $request)
    {
        $detail = Summernote::update($request->dashboard, '/assets/dashboard', '');
        setting_set('dashboard.html', $detail->html);
        return response()->json();
    }
}
