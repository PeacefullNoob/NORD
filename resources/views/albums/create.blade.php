@extends('layouts.main')

@section('content')
<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <main class="myMain">
  <div class = "container-fluid">

<div class = "row justify-content-center">

<div class = "col-md-5 pt-3">
<h3 style="color:white";> Create Album </h3>

<form action="{{ action('GalleryController@store') }}" method="POST" enctype="multipart/form-data">
      <div class="form-row">  
      <div class="form-group col-md-6">   
          <label style="color:white" for="name">Title</label>  
          <div class="form-group col-md-6">               
          <input type="text" style="background-color: white; color:black" name="name" id = "name" required>
      </div>   </div>
      </div>
      <div class="form-group">
          <label style="color:white" for="description">Description</label>
          <textarea class = "form-control" style="background-color: white; color:black"  name="description" rows="3"  id="description" required >  </textarea>
      </div>
      <div class="form-group">
          <label style="color:white">Select file to upload:</label>
          <div class="form-group col-md-6"> 
          <input type="file" style="background-color: white; color:black"  name="cover_image" id="cover_image" required>
      <div class="invalid-feedback">
               Please choose a file.
      </div></div>
        <button type="submit" class="btn btn-primary" id ="uploadB"  >Upload</button>

     <input type="hidden" value="{{ csrf_token() }}" name="_token">
    
    </form> 

<script>
 
  </script>
</div>
</div>
</div>
</main>
@endsection