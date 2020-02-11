@extends('layouts.main')

@section('content')
<div class="site-wrap">
  <main class="myMain">
  <div class = "container-fluid">
  <div class = "row" style ="padding-bottom:20px">
        <a class = "btn btn-info" href = "/home">Go Back</a>
</div>
<div class = "row justify-content-center">

<div class = "col-md-5 pt-3">
<h3 style="color:white";> Upload media </h3>

<form action="{{ action('PhotoController@store') }}" method="POST" enctype="multipart/form-data">
      <div class="form-row">  
      <div class="form-group col-md-6">   
          <label style="color:white" for="title">Media title</label>  
          <div class="form-group col-md-6">               
          <input type="text" style="background-color: white; color:black" name="title" id = "title" required>
      </div>   </div>
      </div>
      <div class="form-group">
          <label style="color:white" for="description">Media Description</label>
          <textarea class = "form-control"  style="background-color: white; color:black" name="description" rows="3"  id="description" required>  </textarea>
      </div>
      <div class="form-group">
          <label style="color:white" for="location">Location</label>
          <input type="text" style="background-color: white; color:black" name="location" id = "location" required>      </div>
      <div class="form-group">
          <label style="color:white">Select file to upload:</label>
          <div class="form-group col-md-6"> 
          <input type="file"  name="photo" id="photo" required>
      <div class="invalid-feedback">
               Please choose a file.
      </div></div>
      <div class="form-group">
          <label style="color:white">Select THUMBNAIL to upload:</label>
          <div class="form-group col-md-6"> 
          <input type="file"  name="thumbnail" id="thumbnail" required>
      <div class="invalid-feedback">
               Please choose a file.
      </div></div>
    
      {{Form::hidden('album_id',$album_id)}}
     
      <button type="submit" class="btn btn-primary" id ="uploadB">Upload</button>

     <input type="hidden" value="{{ csrf_token() }}" name="_token">
    
    </form> 
</div>
</div>
</div>
</div>
</main>
@endsection
