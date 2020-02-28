@extends('layouts.app')

@section('content')
<main class="myMain adminMain">
        <div class="container-fluid memd">
        <div class = "row" style ="padding-bottom:20px">
        <a class = "btn btn-info" href = "/admin/photos/allPhotos">Go Back</a>
</div>
<div class = "row" >
<div class="col-12" style="margin:5px 0px 35px 0px;">
                <h1 style="color:white;text-align: center;"> Edit Media </h1>
                </div>
                <form action=" /admin/photos/updatePhoto/{{$data->id}}" method="POST" enctype="multipart/form-data" style="
padding: 20px;
    display: flex;
    width: 100%;

">
        <div class= "divEditAlbum">
            <h3>THUMBNAIL</h3>
<img    src="/images/thumbnail/{{$data->thumbnail}}" style="    width: 100%;
"/> 
<div class="form-group">
          <label style="color:white">Select THUMBNAIL to upload:</label>
          <div class="form-group"> 
          <input type="file"  name="thumbnail" id="thumbnail" >
      <div class="invalid-feedback">
               Please choose a file.
      </div> 
</div>   
</div>  
</div>

<div class= "divEditAl">

@csrf

    <div class="form-group">   
        <label style="color:white" for="title">Media title</label>  
        <input type="text" class="form-control" style="background-color: white; color:black" name="title" value="{{$data->title}}" id = "title" required>
        </div>
    <div class="form-group">
        <label style="color:white" for="description">Media Description</label>    
            <textarea class = "form-control"  style="background-color: white; color:black"  name="description" rows="3"  id="description" required>{{$data->description}}  </textarea>
            </div>
    <div class="form-group">
        <label style="color:white" for="location">Location</label>     
                <input type="text" class="form-control" style="background-color: white; color:black" value="{{$data->location}}" name="location" id = "location" required>
            </div>
            <div class="form-group">
        <label style="color:white" for="location">Video Url</label>     
                <input type="text" class="form-control" style="background-color: white; color:black" value="{{$data->url}}" name="url" id = "url" required>
            </div>

               
<div class="row form-group">
                      <div class="col-md-12" style="text-align:center">               
            <button type="submit" class="btn btn-primary" id ="uploadB">Upload</button>
            </div>
            </div>

</div>
</form>
        </div>
        </div>

</main>

@endsection