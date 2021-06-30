<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $data['adminSettings']=Settings::all()->sortBy('settings_must');
         
        return view('backend.settings.index',compact('data'));
    }
    public function sortable(){
     //  print_r($_POST['item']);
    foreach($_POST['item'] as $key=>$value){
        $settings=Settings::find(intval($value));
        $settings->settings_must=intval($key);
        $settings->save();
    }
    echo true;
    
    }

    public function destroy($id){
        $settings=Settings::find($id);
        if ($settings->delete()) {
             return back()->with('success','İşlem Başarılı');
        } 
            return back()->with('error','İşlem Başarısız');

         
    }
    public function edit($id){
        $settings=Settings::where('id',$id)->first();

        return view('backend.settings.edit')->with('settings',$settings);
    }
}
