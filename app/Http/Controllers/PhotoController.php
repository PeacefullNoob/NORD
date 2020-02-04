<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\DB;
class PhotoController extends Controller
{
   public function upload($album_id){
       return view('photos.upload_p')->with('album_id',$album_id);
   }
   public function index(){
    $photos =DB::table('photos')->latest('created_at')->get();
    return view('app.index')->with ('photos',$photos);
   
}
//store phooto
public function store(Request $request){
    //dd($request);
    $this -> validate($request,[
    'title' => 'required',
    'photo' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'
    


    ]);
    //Get filename w extension
    $filenameWithExt = $request->file('photo')->getClientOriginalName();
    //Samo ime
    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
    //samo extension
    $extension = $request-> file('photo') ->getclientOriginalExtension();
    
    //create new filename
    $filenameToStore = $filename.'_'.time().'.'.$extension;

    //Upload image
    $path = $request->file('photo')->move(public_path('images'), $filenameToStore);;
//dd($path);
    //Create photo



    $photo = new Photo;
    $photo->album_id= $request->input('album_id');
    $photo->title = $request-> input('title');
    $photo->description = $request-> input('description');
    $photo->size=200;
    $photo->media_type = $extension;
    $photo->location = $request-> input('location');
    $photo->photo = $filenameToStore;
    $photo->user_id = auth()->user()->id;
 
    $photo->save();
    //vraca error

    return redirect('/admin/albums/all_albums')->with('success','Photo uploaded');
}
}
