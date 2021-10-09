<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog']=Blogs::all()->sortBy('blog_must');
         
        return view('backend.blogs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
        //çoklu resim kayıt sistemi  resimleri kaydetmekte sırada veritabanına kayıt var
       
        if(!empty($request->images)){
            $images=$request->images;
            foreach( $images as $image){
                $imageName=uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/blogs'),$imageName);
                $fileNames[] = $imageName;
            }
            $images = json_encode($fileNames);
        }else{
            $images=null;
        }
   
       
     
 
        if (strlen($request->blog_slug>3)) {
             $slug=Str::slug($request->blog_slug);
        }else{
            $slug=Str::slug($request->blog_title);


        }


        if ($request->hasFile('blog_file')) {
            $request->validate([
                'blog_file'=>'required|image|mimes:jpg,jpeg,png|max:2048',
                'blog_title'=>'required',
                'blog_content'=>'required'
           
           
            ]);

            $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
            $request->blog_file->move(public_path('images/blogs'),$file_name);
         
        }else{
            $file_name=null;
        }
        
        
       // $request->settings_value=$file_name;



        $blog=Blogs::insert([
            "blog_title"=>$request->blog_title,
            "blog_slug"=>$slug,
            "blog_file"=>$file_name,
            "blog_galeri"=>$images,
            "blog_content"=>$request->blog_content,
            "blog_status"=>$request->blog_status,
        ]);
        if ($blog) {
            return redirect(route('blog.index'))->with('success','İşlem Başarılı');
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
        $blogs=Blogs::where('id',$id)->first();
        return view('backend.blogs.edit')->with('blogs',$blogs);
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
        if (strlen($request->blog_slug>3)) {
            $slug=Str::slug($request->blog_slug);
       }else{
           $slug=Str::slug($request->blog_title);


       }

    //--------------------------- Bu yorum satırı eski galeri resimlerini silip yerine yeni galeri resimlerini getirmekteyim
       if ($request->hasFile('images')) {
            $images=$request->images;
            foreach( $images as $image){
                $imageName=uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/blogs'),$imageName);
                $fileNames[] = $imageName;
            }
            $images = json_encode($fileNames);

             
            if(!empty($request->old_galeri)){
                foreach (json_decode($request->old_galeri) as $galeri) {
                    @unlink(public_path('images/blogs/'.$galeri));
                }
            }



       }else{
           $images=$request->old_galeri;
           
       }
   //----------------------------
        





       if ($request->hasFile('blog_file')) {
           $request->validate([
               'blog_file'=>'required|image|mimes:jpg,jpeg,png',
               'blog_title'=>'required',
               'blog_content'=>'required'
          
          
           ]);

           $file_name=uniqid().'.'.$request->blog_file->getClientOriginalExtension();
           $request->blog_file->move(public_path('images/blogs'),$file_name);

           
       $blog=Blogs::Where('id',$id)->update([
        "blog_title"=>$request->blog_title,
        "blog_slug"=>$slug,
        "blog_file"=>$file_name,
        "blog_galeri"=>$images,
        "blog_content"=>$request->blog_content,
        "blog_status"=>$request->blog_status,
    ]);
        $path='images/blogs/'.$request->old_file;
        if (file_exists($path)) {
            @unlink(public_path($path));
        }


       }else{
           
       $blog=Blogs::Where('id',$id)->update([
        "blog_title"=>$request->blog_title,
        "blog_slug"=>$slug,
        "blog_galeri"=>$images,
        "blog_content"=>$request->blog_content,
        "blog_status"=>$request->blog_status,
    ]);
       }
       
       
      // $request->settings_value=$file_name;



       if ($blog) {
           return redirect(route('blog.index'))->with('success','İşlem Başarılı');
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
        $resim_silme= Blogs::where('id',$id)->first();
        @unlink(public_path('images/blogs/'.$resim_silme->blog_file));

         
        if(!empty($resim_silme->blog_galeri)){
            foreach (json_decode($resim_silme->blog_galeri) as $galeri) {
                @unlink(public_path('images/blogs/'.$galeri));
            }
        }

        $blog= Blogs::find(intval($id));
         if($blog->delete()){
                echo 1;
         }echo 0;
    }   
    public function sortable(){
        //  print_r($_POST['item']);
       foreach($_POST['item'] as $key=>$value){
           $blogs=Blogs::find(intval($value));
           $blogs->blog_must=intval($key);
           $blogs->save();
       }
       echo true;
       
       }
}