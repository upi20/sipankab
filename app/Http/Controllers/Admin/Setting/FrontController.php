<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $folder_logo = 'assets/setting/front/logo';
    private $folder_meta_logo = 'assets/setting/front/meta';

    public function index(Request $request)
    {
        $page_attr = adminBreadcumb(h_prefix());

        $view = path_view('pages.admin.setting.front');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function save_app(Request $request)
    {
        $result = [];
        setting_set(set_front('app.title'), $request->title);
        setting_set(set_front('app.copyright'), $request->copyright);
        setting_set(set_front('app.preloader'), !is_null($request->preloader));
        setting_set(set_front('app.no_telepon'), $request->no_telepon);
        setting_set(set_front('app.no_whatsapp'), $request->no_whatsapp);
        setting_set(set_front('app.address'), $request->address);

        // logo
        // dark mode
        $foto = '';
        $key = 'foto_dark_landscape_mode';
        $current = setting_get(set_front("app.$key"));
        $result[] = [$key => $current];
        if ($image = $request->file($key)) {
            // delete foto
            if ($current) {
                $path = public_path("$current");
                delete_file($path);
            }

            $foto = $this->folder_logo . '/' . $key . date('Ymdhis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($this->folder_logo), $foto);

            // save foto
            setting_set(set_front("app.$key"), $foto);
            $result[count($result) - 1] = [$key => $foto];
        }

        // light mode
        $foto = '';
        $key = 'foto_light_landscape_mode';
        $current = setting_get(set_front("app.$key"));
        $result[] = [$key => $current];
        if ($image = $request->file($key)) {
            // delete foto
            if ($current) {
                $path = public_path("$current");
                delete_file($path);
            }

            $foto = $this->folder_logo . '/' . $key . date('Ymdhis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($this->folder_logo), $foto);

            // save foto
            setting_set(set_front("app.$key"), $foto);
            $result[count($result) - 1] = [$key => $foto];
        }

        // logo
        // dark mode
        $foto = '';
        $key = 'foto_dark_mode';
        $current = setting_get(set_front("app.$key"));
        $result[] = [$key => $current];
        if ($image = $request->file($key)) {
            // delete foto
            if ($current) {
                $path = public_path("$current");
                delete_file($path);
            }

            $foto = $this->folder_logo . '/' . $key . date('Ymdhis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($this->folder_logo), $foto);

            // save foto
            setting_set(set_front("app.$key"), $foto);
            $result[count($result) - 1] = [$key => $foto];
        }

        // light mode
        $foto = '';
        $key = 'foto_light_mode';
        $current = setting_get(set_front("app.$key"));
        $result[] = [$key => $current];
        if ($image = $request->file($key)) {
            // delete foto
            if ($current) {
                $path = public_path("$current");
                delete_file($path);
            }

            $foto = $this->folder_logo . '/' . $key . date('Ymdhis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($this->folder_logo), $foto);

            // save foto
            setting_set(set_front("app.$key"), $foto);
            $result[count($result) - 1] = [$key => $foto];
        }
        return response()->json($result);
    }

    public function save_meta(Request $request)
    {
        $result = [];
        setting_set(set_front('meta.author'), $request->author);
        setting_set(set_front('meta.keyword'), $request->keyword);
        setting_set(set_front('meta.description'), $request->description);

        // logo
        $key = 'image';
        $current = setting_get(set_front("meta.$key"));
        $result[] = [$key => $current];
        if ($image = $request->file($key)) {
            // delete foto
            $folder = $this->folder_meta_logo;
            if ($current) {
                $path = public_path("$current");
                delete_file($path);
            }

            $foto = $folder . '/' . $key . date('Ymdhis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $foto);

            // save foto
            setting_set(set_front("meta.$key"), $foto);
            $result[count($result) - 1] = [$key => $foto];
        }

        return response()->json($result);
    }

    private function meta_list_get()
    {

        $list = setting_get(set_front("meta_list"), null);
        return is_null($list) ? [] : json_decode($list);
    }

    private function meta_list_set($list)
    {
        $list = json_encode($list);
        setting_set(set_front("meta_list"), $list);

        return $this->meta_list_get();
    }

    public function meta_list()
    {
        return $this->meta_list_get();
    }

    public function meta_insert(Request $request)
    {
        $list = $this->meta_list_get();
        array_push($list, ['name' => $request->name, 'value' => $request->value]);
        return $this->meta_list_set($list);
    }

    public function meta_update(Request $request)
    {
        $id = $request->id;
        $list = $this->meta_list_get();
        $result = [];
        foreach ($list as $k => $v) {
            if ($k == $id) {
                $result[] = ['name' => $request->name, 'value' => $request->value];
            } else {
                $result[] = $v;
            }
        }
        return $this->meta_list_set($result);
    }

    public function meta_delete(Request $request)
    {
        $id = $request->id;
        $list = $this->meta_list_get();
        $result = [];
        foreach ($list as $k => $v) {
            if ($k != $id) {
                $result[] = $v;
            }
        }
        return $this->meta_list_set($result);
    }
}
