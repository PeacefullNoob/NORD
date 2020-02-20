@extends('layouts.app')

@section('content')
<main class="myMain adminMain">
        <div class="container-fluid memd">
        <div class = "row" style ="padding-bottom:20px">
        <a class = "btn btn-info" href = "/admin/albums/all_albums">Go Back</a>
</div>
        <div class= "divEditphoto">
<img    src="/images/{{$data->cover_image}}" style="    width: 100%;
"/> 
</div>
<form action=" /admin/albums/updateAlbum/{{$data->id}}" method="POST" enctype="multipart/form-data" style="
padding: 20px;
">
@csrf

    <div class="form-group">   
        <label style="color:white" for="name">Album title</label>  
        <input type="text" class="form-control" style="background-color: white; color:black" name="name" value="{{$data->name}}" id = "title" required>
        </div>
    <div class="form-group">
        <label style="color:white" for="description">Album Description</label>    
            <textarea class = "form-control"  style="background-color: white; color:black"  name="description" rows="3"  id="description" required>{{$data->description}}  </textarea>
            </div>
   
                <div class="form-group">
          <label style="color:white">Select Media to upload:</label>
          <div class="form-group col-md-6"> 
          <input type="file"  name="cover_image" id="cover_image" >
      <div class="invalid-feedback">
               Please choose a file.
      </div> 
</div>   
<div class="row form-group">
                      <div class="col-md-12" style="text-align:center">               
            <button type="submit" class="btn btn-primary" id ="uploadB">Upload</button>
            </div>
            </div>
</form>
        </div>
</main>

@endsection