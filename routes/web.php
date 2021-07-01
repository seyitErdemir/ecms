<?php

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

Route::get('nedmin','Backend\DefaultController@index')->name('nedmin.Index');

Route::namespace('Backend')->group(function(){
    Route::prefix('nedmin')->group(function(){
        Route::get('settings','SettingsController@index')->name('settings.Index');
        Route::post('sortable','SettingsController@sortable')->name('settings.Sortable');
        Route::get('settings/delete/{id}','SettingsController@destroy');
        Route::get('settings/edit/{id}','SettingsController@edit')->name('settings.Edit');
        Route::post('update/{id}','SettingsController@update')->name('settings.Update');


    });
});