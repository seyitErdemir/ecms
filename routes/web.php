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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Frontend')->group(function(){
    Route::get('/','DefaultController@index')->name('home.Index');
  
  //blog
    Route::get('/blog','BlogController@index')->name('blog.Index');
    Route::get('/blog/{slug}','BlogController@detail')->name('blog.Detail');
    //page
    Route::get('/page/{slug}','PageController@detail')->name('page.Detail');

    
});





Route::namespace('Backend')->group(function(){

    Route::prefix('nedmin')->group(function(){
        Route::get('/dashboard','DefaultController@index')->name('nedmin.Index')->middleware('admin');
        Route::get('/','DefaultController@login')->name('nedmin.Login');
        Route::get('/logout','DefaultController@logout')->name('nedmin.Logout');
     
        Route::post('/login','DefaultController@authenticate')->name('nedmin.Authenticate');

    });

    Route::middleware(['admin'])->group(function(){
        Route::prefix('nedmin/settings')->group(function(){
            Route::get('/','SettingsController@index')->name('settings.Index');
            Route::post('/create','SettingsController@create')->name('settings.Create');
            Route::post('','SettingsController@sortable')->name('settings.Sortable');
            Route::get('/delete/{id}','SettingsController@destroy');
            
            Route::post('/edit','SettingsController@edit')->name('settings.Edit');

            Route::post('/{id}','SettingsController@update')->name('settings.Update');
           
            Route::get('/kategori/{id}','SettingsController@kategori')->name('settings.Kategori');
            


    });
});
});



 
Route::namespace('Backend')->group(function(){
    Route::prefix('nedmin')->group(function(){
        Route::middleware(['admin'])->group(function(){

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
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');