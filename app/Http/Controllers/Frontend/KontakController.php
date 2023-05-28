<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact\FAQ;
use App\Models\Contact\ListContact;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use App\Models\Contact\Message as ContactMessage;
use App\Models\Tracker;
use App\Models\Menu\Frontend as MenuFrontend;

class KontakController extends Controller
{
    private $menuTitleKey = 'kontak';
    private $validate_model = [
        'nama' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'max:255', 'email'],
        'message' => ['required', 'string'],
    ];

    public function index(Request $request)
    {
        $routeData = MenuFrontend::select(['title'])->where('route', $this->menuTitleKey)->first();
        $routeTitle = is_null($routeData) ? null : $routeData->title;
        Tracker::hit();
        $page_attr = [
            'title' => $routeTitle,
        ];

        $contacts = ListContact::getFeViewData();

        $data = compact('page_attr', 'contacts', 'routeTitle');
        $data['compact'] = $data;
        return view('pages.frontend.kontak', $data);
    }

    public function faq(Request $request)
    {
        $page_attr = [
            'title' => setting_get('setting.contact.faq.title'),
        ];

        $faqs = FAQ::where('status', '=', 1)->get();
        $data = compact('page_attr', 'faqs');
        $data['compact'] = $data;
        return view('pages.frontend.faq', $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new ContactMessage();
            $model->nama = $request->nama;
            $model->email = $request->email;
            $model->message = $request->message;
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
