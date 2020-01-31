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

Route::get('/', 'PhotoController@index');

Route::resource('gallery','GalleryController');

Route::resource('photo','PhotoController');

Route::get('/about', function(){
    return view('app.about');
});
Route::get('/contact', function(){
    return view('app.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/photos/upload_p/{id}', 'PhotoController@upload');
    Route::post('/photos/upload_p', 'PhotoController@store');

    Route::get('/create', 'GalleryController@create');
    Route::get('/albums/all_albums', 'GalleryController@view_albums');
    Route::get('/albums/{id}', 'GalleryController@show');
    Route::post('/create', 'GalleryController@store');

    Route::resource('photo','PhotoController');
 }
); 