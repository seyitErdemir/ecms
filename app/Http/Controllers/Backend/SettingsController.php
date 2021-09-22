<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SettingsController extends Controller
{
    public function index(){
        $data['admin']=Settings::all()->sortBy('id');
        $data['adminSettings']=Settings::orderBy('settings_must','ASC')->Where('category_id',1)->get();
        $veri=Settings::select('category_id')->groupBy('category_id')->get();
       
       
        $kategori= array();
        foreach ($veri as $key ) {
            $category_title=Settings::Where('category_id',$key->category_id)->first()->settings_category;
            array_push($kategori,['kategori_id'=>$key->category_id,'kategori_title'=>$category_title]);
             
        }
     
        
        return view('backend.settings.index',compact('data','kategori'));
    }



    public function create(Request $request ){
      
         
        if($request->settings_category){
           
            $category_title=$request->settings_category;

             
            
            if( empty(Settings::Where('settings_category',$category_title)->get()->first()) ){
                
                $category_id=Settings::max('category_id')+1;
            }else{
               
                $category_id=Settings::Where('settings_category',$category_title)->first()->category_id;
            } 
            
        } 
      
        $key_category=$request->settings_key."_category";
         
        $settings=Settings::insert([
            "settings_description"=>$request->settings_description,
            "settings_key"=>$request->settings_key,
            "settings_type"=>$request->settings_type,
            "settings_category"=>$category_title,
            "category_id"=>$category_id,
            "key_category"=>$key_category,
            
        ]);
        if ($settings) {
            return redirect(route('settings.Index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');
    }


   public function kategori($id){
    $data['admin']=Settings::all()->sortBy('id');    
    $data['adminSettings']=Settings::orderBy('settings_must','ASC')->Where('category_id',$id)->get();
    $veri=Settings::select('category_id')->groupBy('category_id')->get();
       
       
    $kategori= array();
    foreach ($veri as $key ) {
        $category_title=Settings::Where('category_id',$key->category_id)->first()->settings_category;
        array_push($kategori,['kategori_id'=>$key->category_id,'kategori_title'=>$category_title]);
         
    }
     

    return view('backend.settings.index',compact('data','kategori'));
    
 
  
   }

    public function sortable(){
       
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








    public function edit(Request $request){
     
    
      
         
      $key=array_keys($request->all());
      foreach($key as $ke){
     
        //resimli inputların dolu olup olmadıgını kontrol edip kaydetmek için
        if ($request->hasFile($ke)) {
            
          
            
            $file_name=uniqid().'.'.$request->$ke->getClientOriginalExtension();
            
            $kayit= $request->$ke->move(public_path('images/settings'),$file_name);
           
            if($kayit){
                $yol=$ke."_old_file";
                $path='images/settings/'.$request->$yol;
                
                if (file_exists($path)) {
                     @unlink(public_path($path));
                }
            }
          

 


            $request->$ke=$file_name;
            
            
            $settings=Settings::Where('settings_key',$ke)->update(
                [
                    "settings_value"=>$request->$ke
                ]
                
            );
          
         }  else{
            $settings=Settings::Where('settings_key',$ke)->update(
                [
                    "settings_value"=>$request->$ke
                ]
                
            );
         }
      } 
      
     
     
 
      foreach($key as $ke){

        //kategorileri kaydırmak için
        $category_id=Settings::Where('settings_category',$request->$ke)->first();
       
        if(!empty($category_id->category_id)){
           
         $settings=Settings::Where('key_category',$ke)->update(
             [
                 "settings_category"=>$request->$ke,
                 "category_id"=>$category_id->category_id,
             ]
             
         );
         
        }
     
  
        // input içi degerleri kaydetmek için
        $settings=Settings::Where('settings_key',$ke)->update(
            [
                "settings_value"=>$request->$ke
            ]
            
        );
      }  
 

      return back();
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