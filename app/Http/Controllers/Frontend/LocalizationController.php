<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index( $locale)
    { 
        Session::put('locale',   $locale );
       
        return redirect()->back();
    }
}
