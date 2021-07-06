<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user']=User::all()->sortBy('user_must');
         
        return view('backend.users.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_title'=>'required',
            'user_content'=>'required',
            'user_url'=>'active_url'
       
       
        ]);
        if (strlen($request->user_slug>3)) {
             $slug=Str::slug($request->user_slug);
        }else{
            $slug=Str::slug($request->user_title);


        }


        if ($request->hasFile('user_file')) {
            $request->validate([
                'user_file'=>'required|image|mimes:jpg,jpeg,png|max:2048',
                
           
           
            ]);

            $file_name=uniqid().'.'.$request->user_file->getClientOriginalExtension();
            $request->user_file->move(public_path('images/users'),$file_name);
         
        }else{
            $file_name=null;
        }
        
        
       // $request->settings_value=$file_name;



        $user=User::insert([
            "user_title"=>$request->user_title,
            "user_slug"=>$slug,
            "user_file"=>$file_name,
            "user_url"=>$request->user_url,
            "user_content"=>$request->user_content,
            "user_status"=>$request->user_status,
        ]);
        if ($user) {
            return redirect(route('user.index'))->with('success','İşlem Başarılı');
        }
        return back()->with('error','İşlem Başarısız');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $users=User::where('id',$id)->first();
        return view('backend.users.edit')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            'user_title'=>'required',
            'user_content'=>'required',
            'user_url'=>'active_url'
       
        ]);
        
        if (strlen($request->user_slug>3)) {
            $slug=Str::slug($request->user_slug);
       }else{
           $slug=Str::slug($request->user_title);


       }


       if ($request->hasFile('user_file')) {
       
        $request->validate([
            'user_file'=>'required|image|mimes:jpg,jpeg,png|max:2048',
            
        ]);

           $file_name=uniqid().'.'.$request->user_file->getClientOriginalExtension();
           $request->user_file->move(public_path('images/users'),$file_name);

           
       $user=User::Where('id',$id)->update([
        "user_title"=>$request->user_title,
        "user_slug"=>$slug,
        "user_file"=>$file_name,
        "user_url"=>$request->user_url,
        "user_content"=>$request->user_content,
        "user_status"=>$request->user_status,
    ]);
        $path='images/users/'.$request->old_file;
        if (file_exists($path)) {
            @unlink(public_path($path));
        }


       }else{
           
       $user=User::Where('id',$id)->update([
        "user_title"=>$request->user_title,
        "user_slug"=>$slug,
        "user_url"=>$request->user_url,
        "user_content"=>$request->user_content,
        "user_status"=>$request->user_status,
    ]);
       }
       
       
      // $request->settings_value=$file_name;



       if ($user) {
           return redirect(route('user.index'))->with('success','İşlem Başarılı');
       }
       return back()->with('error','İşlem Başarısız...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find(intval($id));
         if($user->delete()){
                echo 1;
         }echo 0;
    }   
    public function sortable(){
        //  print_r($_POST['item']);
       foreach($_POST['item'] as $key=>$value){
           $users=User::find(intval($value));
           $users->user_must=intval($key);
           $users->save();
       }
       echo true;
       
       }
}