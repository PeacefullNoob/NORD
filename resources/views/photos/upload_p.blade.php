@extends('layouts.main')

@section('content')
<div class="site-wrap">
    <main class="myMain" style="width:65%">
        <div class = "row" style ="padding-bottom:20px">
            <a class = "btn btn-info" href = "/admin/albums/all_albums">Go Back</a>
            </div>
        <div class="col-12" style="margin:5px 0px 35px 0px;">
                <h1 style="color:white;text-align: center;"> Upload media </h1>
                </div>
             <div class= "uploadPDiv">
            <form action="{{ action('PhotoController@store') }}" method="POST" enctype="multipart/form-data">    
                  <div class="form-group">
          <label style="color:white" for="title">Media title</label>              
                <input type="text" class="form-control" placeholder="Enter media name" style="background-color: white; color:black" name="title" id = "title" required>
          </div>
          <div class="form-group">
          <label style="color:white" for="location">Location</label>
                <input type="text"  class="form-control" placeholder="Enter location" style="background-color: white; color:black" name="location" id = "location" required>   
          </div>
          <div class="form-group ">
          <label style="color:white" for="description">Media Description</label>
                <textarea class = "form-control"  style="background-color: white; color:black" name="description" rows="3"  id="description" required>  </textarea>
          </div>
          <hr>
          <div class="form-group mt-3">
          <label style="color:white">Select file to upload:</label>
                    <input type="file"  name="photo" id="photo" required>
                    <div class="invalid-feedback">
                    Please choose a file.
                    </div>
          </div>
          <div class="form-group mt-3">
          <label style="color:white">Select THUMBNAIL to upload:</label>
                <input type="file"  name="thumbnail" id="thumbnail" required>
                <div class="invalid-feedback">
                    Please choose a file.
                    </div>
          </div>
          <hr>
          {{Form::hidden('album_id',$album_id)}}
          <div class="row form-group">
                      <div class="col-md-12" style="text-align:center">        
            <button type="submit" class="btn btn-primary" id ="uploadB">Upload</button>
            </div> 
            </div> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
        </div> 

</main>
</div>
@endsection
