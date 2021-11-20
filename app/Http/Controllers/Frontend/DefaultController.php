<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Sliders;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
     public function index(){
         $data['blog']=Blogs::all()->sortBy('blog_must');
         $data['slider']=Sliders::all()->sortBy('slider_must');
        
         return view('frontend.default.index',compact('data'));
     }
}
