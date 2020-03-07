<?php

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
})->name('index');

Route::get('/maps', 'MainController@maps')->name('maps');
Route::get('/club/{id}', 'MainController@club');
Route::get('/partners', 'MainController@partners')->name('partner');
Route::get('/tournament', 'MainController@tournament')->name('tournament');
Route::get('/contacts', 'MainController@contacts')->name('contact');
Route::auth();
Route::get('/pricelist', function(){
    return view('price');
})->name('pricelist');
Route::get('/computers', function(){
    return view('computer');
})->name('computer');


Route::group(['middleware' => 'auth'],function(){
    Route::resource('clubs', 'ClubsController');
    Route::resource('tournaments', 'TournamentsController');
});
