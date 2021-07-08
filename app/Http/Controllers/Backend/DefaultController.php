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

        if (Auth::attempt($credentials)) {
            return "giriş başarılı";
        }else{
            return back()->with('error','Hatalı Kullanıcı');
        }
    }
}
