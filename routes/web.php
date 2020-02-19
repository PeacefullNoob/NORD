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
Route::get('/contact',"ContactMessageController@create");
Route::post('/contact',"ContactMessageController@store");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/photos/upload_p/{id}', 'PhotoController@upload');
    Route::post('/photos/upload_p', 'PhotoController@store');
    Route::get('/photos/allPhotos', 'PhotoController@allPhotos');
    Route::post('/photos/updatePhoto/{id}', 'PhotoController@update');
    Route::get( '/photos/edit_photo/{id}', 'PhotoController@edit');
    Route::post('/photos/delete/{id}', 'PhotoController@destroy');

    
    Route::post('/albums/delete/{id}', 'GalleryController@destroy');
    Route::post('/albums/updateAlbum/{id}', 'GalleryController@update');
    Route::get( '/albums/edit_album/{id}', 'GalleryController@edit');
    Route::get('/create', 'GalleryController@create');
    Route::get('/albums/all_albums', 'GalleryController@index');
    Route::get('/albums/{id}', 'GalleryController@show');
    Route::post('/create', 'GalleryController@store');
 }
); 