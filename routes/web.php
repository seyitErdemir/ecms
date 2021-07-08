<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::namespace('Backend')->group(function(){

    Route::prefix('nedmin')->group(function(){
        Route::get('/','DefaultController@index')->name('nedmin.Index');
        Route::get('/login','DefaultController@login')->name('nedmin.Login');
        Route::post('/login','DefaultController@authenticate')->name('nedmin.Authenticate');

    });


    Route::prefix('nedmin/settings')->group(function(){
        Route::get('/','SettingsController@index')->name('settings.Index');
        Route::post('','SettingsController@sortable')->name('settings.Sortable');
        Route::get('/delete/{id}','SettingsController@destroy');
        Route::get('/edit/{id}','SettingsController@edit')->name('settings.Edit');
        Route::post('/{id}','SettingsController@update')->name('settings.Update');


    });
});



 
Route::namespace('Backend')->group(function(){
    Route::prefix('nedmin')->group(function(){
        //blog module
        Route::post('/blog/sortable','BlogController@sortable')->name('blog.Sortable');
        Route::resource('blog','BlogController');
        //page
        Route::post('/page/sortable','PageController@sortable')->name('page.Sortable');
        Route::resource('page','PageController');
         //slider
         Route::post('/slider/sortable','SliderController@sortable')->name('slider.Sortable');
        Route::resource('slider','SliderController');
        
           //admin
           Route::post('/user/sortable','UserController@sortable')->name('user.Sortable');
           Route::resource('user','UserController');
   
   
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');