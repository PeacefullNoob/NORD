@extends('layouts.main')

@section('content')
<main class="myMain mem">
        <div class="container-fluid memd">
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
                
            <button type="submit" class="btn btn-primary" id ="uploadB">Upload</button>
            </div>
</form>
        </div>
</main>

@endsection