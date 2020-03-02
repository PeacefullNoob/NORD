<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Photo;
use App\Album;
use Illuminate\Support\Facades\DB;
use FFMpeg;
use Storage;
class PhotoController extends Controller
{
    public function index(){
        $photos =DB::table('photos')->orderBy('views', 'desc')->get();
        $albums =Album::with('Photos')->get();
        return view('app.index' , compact("photos","albums"));  
    }

   public function upload(){
    $albums =Album::all();

       return view('photos.upload_p', compact("albums"));
    }


//store phooto
public function store(Request $request){
    $this -> validate($request,[
    'title' => 'required',
    'photo' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
    'thumbnail' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'

    ]);
    dd($request);

    if ($request->hasFile('photo')) {
//PHOTO
    //Get filename w extension
    $filenameWithExt = $request->file('photo')->getClientOriginalName();
    //Samo ime
    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
    //samo extension
    $extension = $request-> file('photo') ->getclientOriginalExtension();
    //create new filename
    $filenameToStore = $filename.'_'.time().'.'.$extension;
    //Upload image
 $path = $request->file('photo')->move(public_path('images'), $filenameToStore);
    }else{
        $filenameToStore="null";
        $extension="null";
    }

if($extension=='mp4'){
 $getID3 = new \getID3;
$file = $getID3->analyze($path);
$duration = date('I:s', $file['playtime_seconds']);
} else {
    $duration='00:00';
}

//
    //THUMBNAIL
  //Get filename w extension
  $filenameWithExt1 = $request->file('thumbnail')->getClientOriginalName();
  //Samo ime
  $filename1 = pathinfo($filenameWithExt1,PATHINFO_FILENAME);
  //samo extension
  $extension1 = $request-> file('thumbnail') ->getclientOriginalExtension();
  //create new filename
  $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
  //Upload thumbnail
  $path1 = $request->file('thumbnail')->move(public_path('images/thumbnail'), $filenameToStore1);

  
  $description = $request-> input('description');
    //Create photo
    $photo = new Photo;
    $photo->album_id= $request->input('album_id');
    $photo->title = $request-> input('title');
    $photo->$description;
    $photo->size=200;
    $photo->media_type = $extension;
    $photo->location = $request-> input('location');
    $photo->photo = $filenameToStore;
    $photo->thumbnail = $filenameToStore1;
    $photo->user_id = auth()->user()->id;
    $photo->url = $request-> input('url');
    $photo->save();
    //vraca error
    return redirect('/admin/albums/all_albums')->with('success','Photo uploaded');
}


public function edit($id){
    $data = Photo::findOrFail($id);
    return view('photos.edit_photo', compact('data'));
}

public function update(Request $request, $id){
    dd($request);
$photos = DB::table('photos')->where('id', '=', $id)->get();
$data = Photo::findOrFail($id);
 $photoId = $id;
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'location' => 'required' ,
        'thumbnail' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'

    ]);

    $title =  $request->title;
    $description = $request->description;
    $location= $request->location;


    //THUMBNAIL
    if ($request->hasFile('thumbnail')) {

  //Get filename w extension
  $filenameWithExt1 = $request->file('thumbnail')->getClientOriginalName();
  //Samo ime
  $filename1 = pathinfo($filenameWithExt1,PATHINFO_FILENAME);
  //samo extension
  $extension1 = $request-> file('thumbnail') ->getclientOriginalExtension();
  //create new filename
  $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
  //Upload thumbnail
  $path = $request->file('thumbnail')->move(public_path('images/thumbnail'), $filenameToStore1);;
        //

    }
    else{
        $filenameToStore1 = $data->thumbnail;

    } 
    DB::table('photos')->where('id', $photoId)->update([
        'title' => $title,
        'description' => $description,
        'location' => $location ,
        'thumbnail' => $filenameToStore1
    ]);

   return redirect()->back()-> with('success', 'Data is successfully updated');
}

public function destroy($id){
    $photo = Photo::find($id);

     if($photo->photo != 'noimage.jpg'){
        // Delete Image
        Storage::delete('/public/images/'.$photo->photo);
    }
    $photo->delete();
    return view('home')->with('success', 'Photo Removed');
}


public function views(Request $request){
    $photo = Photo::findOrFail($request->id);
    DB::table('photos')->where('id', $photo->id)->increment('views');
}
}
