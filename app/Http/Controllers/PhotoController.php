<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\DB;
class PhotoController extends Controller
{
    public function index(){
        $photos =DB::table('photos')->latest('created_at')->get();
        return view('app.index')->with ('photos',$photos);  
    }

   public function upload($album_id){
       return view('photos.upload_p')->with('album_id',$album_id);
    }


//store phooto
public function store(Request $request){
    $this -> validate($request,[
    'title' => 'required',
    'photo' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
    'thumbnail' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'

    ]);
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
    $path = $request->file('photo')->move(public_path('images'), $filenameToStore);;
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
  $path = $request->file('thumbnail')->move(public_path('images/thumbnail'), $filenameToStore1);;
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
    $photo->thumbnail = $filenameToStore1;
    $photo->user_id = auth()->user()->id;
 
    $photo->save();
    //vraca error

    return redirect('/admin/albums/all_albums')->with('success','Photo uploaded');
}

public function allPhotos() {
    $photos =DB::table('photos')->latest('created_at')->get();
    return view('photos.allPhotos')->with ('photos',$photos);  

}
public function edit($id){
    $data = Photo::findOrFail($id);
    return view('photos.edit_photo', compact('data'));
}
public function updatePhoto(Request $request, $id){
/* $image_name = $request->hidden_image;
$image = $request->fle('image');
if($image != '')
{

}
else{


}
 */

$photos = DB::table('photos')->where('id', '=', $id)->get();

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

    DB::table('photos')->where('id', $photoId)->update([
        'title' => $title,
        'description' => $description,
        'location' => $location ,
        'thumbnail' => $filenameToStore1
    ]);

   return redirect()->back()-> with('success', 'Data is successfully updated');
}
}
