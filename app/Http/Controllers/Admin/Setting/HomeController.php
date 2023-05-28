<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $folder_image = '/assets/setting/home';
    private $setting_prefix = 'setting.home';
    private $pre = '';

    public function index()
    {
        $page_attr = adminBreadcumb(h_prefix());

        $pre = $this->setting_prefix;
        $s = function (string $str) use ($pre): string {
            return "$pre.$str";
        };

        $view = path_view('pages.admin.setting.home');
        $data = compact('page_attr', 'view', 's');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function hero(Request $request)
    {
        $this->pre = 'hero';
        setting_set($this->s('visible'), $request->visible != null);
        setting_set($this->s('deskripsi'), $request->deskripsi);
        setting_set($this->s('tombol_title'), $request->tombol_title);
        setting_set($this->s('tombol_link'), $request->tombol_link);
        setting_set($this->s('judul'), $request->judul);
        setting_set($this->s('sub_judul'), $request->sub_judul);

        // image
        $key = 'foto';
        $current = setting_get($this->s($key));
        $foto = $current;
        if ($image = $request->file($key)) {
            // delete foto
            $folder = $this->folder_image;
            if ($current) {
                $path = public_path("$folder/$current");
                delete_file($path);
            }

            $foto = "$folder/hero" . date("Ymdhis") . "." . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $foto);

            // save foto
            setting_set($this->s($key), $foto);
        }
        return response()->json();
    }

    public function galeri(Request $request)
    {
        $this->pre = 'galeri';
        setting_set($this->s('visible'), $request->visible != null);
        setting_set($this->s('title'), $request->title);
        setting_set($this->s('sub_title'), $request->sub_title);
        return response()->json();
    }

    public function artikel(Request $request)
    {
        $this->pre = 'artikel';
        setting_set($this->s('visible'), $request->visible != null);
        setting_set($this->s('title'), $request->title);
        setting_set($this->s('sub_title'), $request->sub_title);
        return response()->json();
    }

    // dsave prefix
    private function s(string $str): string
    {
        return "$this->setting_prefix.$this->pre.$str";
    }
}
