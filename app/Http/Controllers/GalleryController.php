<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Album;

class GalleryController extends Controller
{
    // List Galleries
    public function view_albums(){
        $albums =Album::with('Photos')->get();
        return view('albums.all_albums')->with ('albums',$albums);
    }

    //show create form
    public function create(){
        return view('albums.create');
    }
    //store gallery
    public function store(Request $request){
        $this -> validate($request,[
        'name' => 'required',
        'cover_image' => 'image|max:1999'


        ]);
        //Get filename w extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //Samo ime
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //samo extension
        $extension = $request-> file('cover_image') ->getclientOriginalExtension();
        //create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        //Upload image
        $path = $request->file('cover_image')->move(public_path('images'),$filenameToStore);

        //Create album
        $album = new Album;
        $album->name = $request-> input('name');
        $album->description = $request-> input('description');
        $album->cover_image = $filenameToStore;
        $album ->save();
        //vraca error

        return redirect('/albums/all_albums')->with('success','Album Created');
}
    public function show($id){
    
    $album = Album::with('Photos')->find($id);
  
    return view('albums.show', compact('album'));

    }
 
}