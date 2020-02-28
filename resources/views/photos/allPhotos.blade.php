@extends('layouts.app')

@section('content')
<main class="myMain adminMain mem">
        <div class="container-fluid photos">
        <div class = "row" style ="padding-bottom:20px">
        <a class = "btn btn-info" href = "/home">Go Back</a>
</div>
<table class="table table-hover">
    <thead>
    <tr>
        <th>AlbumID</th> 
        <th>Title</th>
        <th>Description</th>
        <th>Url</th>
        <th>Media</th>
        <th>Thumbnail</th> 
        <th>created_at</th> 
        <th>updated_at</th> 
        <th>Options</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
@foreach($photos as $photo)
<tr>
        @php
        $album = DB::table('albums')->where('id', $photo->album_id)->first();
        @endphp
        <th>{{$album->name}}</th> 
        <th>{{$photo->title}}</th>
        <th>{{$photo->description}}</th>
        <th>{{$photo->url}}</th>
        <th><img src = "/images/{{$photo->photo}}" style="height: 73px;width: 100px;"/></th>
        
      
<th><img src = "/images/thumbnail/{{$photo->thumbnail}}" style="height: 73px;width: 100px;"/></th>
        <th>{{$photo->created_at}}</th> 
        <th>{{$photo->updated_at}}</th> 
        <th>  <a href="/admin/photos/edit_photo/{{$photo->id}}" ><button type="button" class="btn btnSuccess">Edit</button></th>
        <th> 
        <form action="/admin/photos/delete/{{$photo->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
         <button type="submit" class="btn btnError">Delete</button>
         </form>
         </th>
  </tr>
  @endforeach
  </tbody>
</table>

</div>
</main>

@endsection 