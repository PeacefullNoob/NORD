@extends('layouts.main')

@section('content')

@if(count($albums)>0)
<main class="main-content1">
        <div class="container-fluid photos">
          
        <div class = "row" style ="padding-bottom:20px">
        <a class = "btn btn-info" href = "/home">Go Back</a>
</div>
      <div class="allAlRow">
        @foreach($albums as $album)
   
        <div class="allAlCol" data-aos="fade-up">
        <a href="/admin/photos/upload_p/{{$album->id}}" >
        <div class="tekstPreko">Upload</div>
            <img src="/images/{{$album->cover_image}}" alt="{{$album->name}}" class="allAlimg">   
            </a>      
            <div class="row" style="
    padding: 10px 2px 0px 0px;
">
              <div class="col-md-4 photo-text-more" >
              <h3 class="heading">{{$album->name}}</h3>
              
</div>
 
 
 <div class="col-md-4 editAlbum " > 
  <a href="/admin/albums/edit_album/{{$album->id}}" >
  <button type="button" class="btnEdit">Edit</button>
 </div>
 <div class="col-md-4 deleteAlbum " > 

 <form action="/admin/albums/delete/{{$album->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
         <button type="submit" class="btnError1">Delete</button>
         </form>
         </div>

</div>
</div>
@endforeach
      </div>
      </div>
  </main>
  @else 
  <p style = "color:white">No photos</p>
  @endif


@endsection