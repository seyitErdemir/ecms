<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class DefaultController extends Controller
{
    public function index()
    {

        return view('backend.default.index');
    }
    public function login()
    {

        return view('backend.default.login');
    }
    public function authenticate(Request $request)
    {
        $request->flash();
        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt($credentials, $remember_me)) {
            return redirect()->intended(route('admin.Index'));
        } else {
            return back()->with('error', 'Hatalı Kullanıcı');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('admin.Login'))->with('success', 'Güvenli Çıkış Yapıldı');
    }



    public function ceviriPost(Request $request)
    {
        @dd( app()->getLocale());
        app()->setLocale('en');
        $veri = Lang::get('page');
        app()->setLocale('tr');
        $veri2 = Lang::get('page');

        $toplam = array_merge($veri, $veri2);
        dd($veri2, $veri, $toplam);

        Lang::get('page.deneme');

        Lang::has('general', 'tr', true);
        dd(Lang::get('page.deneme'));

        dd($veri);
        dd($request->all());
    }
}
