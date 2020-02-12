@extends('layouts.main')

@section('content')
<main class="myMain mem">
        <div class="container-fluid memd">
        <div class = "row" style ="padding-bottom:20px">
        <a class = "btn btn-info" href = "/home">Go Back</a>
</div>
        <div class= "divEditphoto">
            <p>THUMBNAIL</p>
<img    src="/images/thumbnail/{{$data->thumbnail}}" style="    width: 100%;
"/> 
</div>

<form action=" /admin/photos/updatePhoto/{{$data->id}}" method="POST" enctype="multipart/form-data" style="
padding: 20px;
">
@csrf

    <div class="form-group">   
        <label style="color:white" for="title">Media title</label>  
        <input type="text" style="background-color: white; color:black" name="title" value="{{$data->title}}" id = "title" required>
        </div>
    <div class="form-group">
        <label style="color:white" for="description">Media Description</label>    
            <textarea class = "form-control"  style="background-color: white; color:black"  name="description" rows="3"  id="description" required>{{$data->description}}  </textarea>
            </div>
    <div class="form-group">
        <label style="color:white" for="location">Location</label>     
                <input type="text" style="background-color: white; color:black" value="{{$data->location}}" name="location" id = "location" required></div>

                <div class="form-group">
          <label style="color:white">Select THUMBNAIL to upload:</label>
          <div class="form-group col-md-6"> 
          <input type="file"  name="thumbnail" id="thumbnail" required>
      <div class="invalid-feedback">
               Please choose a file.
      </div> 
</div>   
      <div class="form-group">       
            <button type="submit" class="btn btn-primary" id ="uploadB">Upload</button>
            </div>
</form>
        </div>
</main>

@endsection