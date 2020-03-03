<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Album;
use Illuminate\Support\Facades\DB;
use Storage;

class GalleryController extends Controller
{
    // List Galleries
    public function index(){
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
        'cover_image' => 'image|max:8000'


        ]);  
          if ($request->hasFile('cover_image')) {

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
          }else{

            $filenameToStore = "";
        }
        $description = $request-> input('description');
   
       //Create album
        $album = new Album;
        $album->name = $request-> input('name');
        $album->$description;
        $album->cover_image = $filenameToStore;
        $album ->save();
        //vraca error

        return redirect('/home')->with('success','Album Created');
}
    public function show($id){
    
    $album = Album::with('Photos')->find($id);
  
    return view('albums.show', compact('album'));

    }
     public function destroy($id){
        $album = Album::find($id);

        if($album->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('/public/images/'.$album->cover_image);
        }
        $album->delete();
        return redirect()->back()->with('success', 'Album Removed');
    } 
    public function edit($id){
        $data = Album::findOrFail($id);
        return view('albums.edit_album', compact('data'));
    }
     public function update(Request $request, $id){
        $albums = DB::table('albums')->where('id', '=', $id)->get();
        $data = Album::findOrFail($id);
         $albumId = $id;
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'cover_image' => 'jpeg,png,jpg,svg'
        
            ]);
            $name =  $request->name;
            $description = $request->description;
            //cover_image
            if ($request->hasFile('cover_image')) {
          //Get filename w extension
          $filenameWithExt1 = $request->file('cover_image')->getClientOriginalName();
          //Samo ime
          $filename1 = pathinfo($filenameWithExt1,PATHINFO_FILENAME);
          //samo extension
          $extension1 = $request-> file('cover_image') ->getclientOriginalExtension();
          //create new filename
          $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
          //Upload cover_image
          $path = $request->file('cover_image')->move(public_path('images/cover_image'), $filenameToStore1);;

            }else{
                $filenameToStore1 = $data->cover_image;
        
            } 
            DB::table('albums')->where('id', $albumId)->update([
                'name' => $name,
                'description' => $description,
                'cover_image' => $filenameToStore1
            ]);
        
           return redirect()->back()-> with('success', 'Data is successfully updated');
        } 
 
}