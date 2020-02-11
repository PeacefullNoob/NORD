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
    Route::get('/photos/allPhotos', 'PhotoController@allPhotos');
    Route::post('/photos/updatePhoto/{id}', 'PhotoController@updatePhoto');
    Route::get( '/photos/edit_photo/{id}', 'PhotoController@edit');
    



    Route::get('/create', 'GalleryController@create');
    Route::get('/albums/all_albums', 'GalleryController@view_albums');
    Route::get('/albums/{id}', 'GalleryController@show');
    Route::post('/create', 'GalleryController@store');
   
 }
); 