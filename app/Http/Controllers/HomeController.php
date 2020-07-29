<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Photo;
use Illuminate\Support\Facades\DB;
use App\Album;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *w
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('admin.home');
    }
    public function show($id)
    {

        $photos = DB::table('photos')->where('album_id', $id)->orderBy('sort_id','asc')->get();;
        $album = Album::findOrFail($id);

        return view('admin.adminMedia', compact("photos", "album"));
    }
    public function updateOrder(Request $request){
       
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
       
            foreach($arr as $sortOrder => $id){
                $menu = Photo::find($id);
                $menu->sort_id = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
