<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    public function index(){
        
        return view('backend.default.index');

    }
    public function login(){

        return view('backend.default.login');
    }
    public function authenticate(Request $request){
        $request->flash();
        $credentials=$request->only('email','password');
        $remember_me=$request->has('remember_me') ? true : false;
        
        if (Auth::attempt($credentials,$remember_me)) {
            return redirect()->intended(route('nedmin.Index'));
        }else{
            return back()->with('error','Hatalı Kullanıcı');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('nedmin.Login'))->with('success','Güvenli Çıkış Yapıldı');
    }
}
