<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $data['adminSettings']=Settings::all()->sortBy('id');
        
        $kategori= array();
        $kategori_id=1;
        foreach(  $data['adminSettings'] as $category){
            if($category->category_id==$kategori_id){
                array_push($kategori,['kategori_id'=>$category->category_id,'kategori_title'=>$category->settings_category]);
                $kategori_id++;
            }
      
        }
        
        return view('backend.settings.index',compact('data','kategori'));
    }

    public function create(Request $request ){
        
       $category_id=-1;
         
        if($request->settings_category){

            $category_title=$request->settings_category;
          
           $category_id=Settings::Where('settings_category',$request->settings_category)->first()->category_id;
           
        }else{
           
            $category_title=$request->settings_category_2;
            $category_id=Settings::max('category_id')+1;
      
        }
      

        $settings=Settings::insert([
            "settings_description"=>$request->settings_description,
            "settings_key"=>$request->settings_key,
            "settings_type"=>$request->settings_type,
            "settings_category"=>$category_title,
            "category_id"=>$category_id,
            
        ]);
        if ($settings) {
            return redirect(route('settings.Index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
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
    public function update(Request $request , $id){

        if ($request->hasFile('settings_value')) {
            $request->validate([
                'settings_value'=>'required|image|mimes:jpeg,jpg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->settings_value->getClientOriginalExtension();
            $request->settings_value->move(public_path('images/settings'),$file_name);
            $request->settings_value=$file_name;
       
        } 


        $settings=Settings::Where('id',$id)->update(
            [
                "settings_value"=>$request->settings_value
            ]
            
        );
        if ($settings) {
            $path='images/settings/'.$request->old_file;
            if (file_exists($path)) {
                 @unlink(public_path($path));
            }

             return back()->with("success","Düzenleme İşlemi Başarılı");
        }
        return back()->with("error","Düzenleme İşlemi Başarısız");

        
    }
}