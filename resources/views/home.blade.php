@extends('layouts.app')

@section('content')
<main class="myMain adminMain mem">
        <div class="container-fluid photos">
        <div class = "row" style ="padding-bottom:20px">

      <a class = "btn" href = "/admin/photos/upload_p/">+Dodaj video/fotografiju</a>

</div>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Naslov</th>
        <th>Kategorija</th> 
        <th>Lokacija</th>
        <th>created_at</th> 
        <th>updated_at</th> 
        <th>Forma</th>
      </tr>
    </thead>
    <tbody>

@foreach($photos as $photo)
<tr>
    <th class="borderT">{{$photo->title}}</th>
        @php
        $album = DB::table('albums')->where('id', $photo->album_id)->first();
        @endphp
        <th class="borderT">{{$album->name}}</th> 
      
        <th class="borderT">{{$photo->location}}</th>
        <th class="borderT">{{$photo->created_at}}</th> 
        <th class="borderT">{{$photo->updated_at}}</th> 
        <th class="borderT"><img src = "/images/thumbnail/{{$photo->thumbnail}}" style="height: 73px;width: 100px;"/></th>

        <th>  <a href="/admin/photos/edit_photo/{{$photo->id}}" ><button type="button" class="btn btnSuccess">Edit</button></th>
      
        <form action="/admin/photos/delete/{{$photo->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
<!--          
 -->         </form>
      
  </tr>
  @endforeach
  </tbody>
</table>

</div>
</main>

@endsection 