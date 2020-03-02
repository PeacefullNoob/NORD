@extends('layouts.app')

@section('content')
<main style="padding-top: 20px;">
        <div class="container-fluid memd">
        <div class = "row" style ="padding-bottom:20px">
        <a class = "btn back " href = "/home" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Nazad</a>

</div>
              <form action=" /admin/photos/updatePhoto/{{$data->id}}" method="POST" enctype="multipart/form-data" style="
    display: flex;
    width: 100%;
">
<div class= "divEditAl">

@csrf

    <div class="form-group">   
<!--         <label style="color:white" for="title">Media title</label>  
 -->        <input type="text" class="form-control" style="background-color: white; color:black" name="title" value="{{$data->title}}" id = "title" required>
        </div>
 <!--    <div class="form-group">
         <label style="color:white" for="description">Media Description</label>    
            <textarea class = "form-control"  style="background-color: white; color:black"  name="description" rows="3"  id="description" required>{{$data->description}}  </textarea>
            </div> -->
    <div class="form-group">
<!--         <label style="color:white" for="location">Location</label>     
 -->                <input type="text" class="form-control" style="background-color: white; color:black" value="{{$data->location}}" name="location" id = "location" required>
            </div>
            <div class="form-group">
<!--         <label style="color:white" for="location">Video Url</label>     
 -->                <input type="text" class="form-control" style="background-color: white; color:black" value="{{$data->url}}" name="url" id = "url" required>
            </div>
            <div class="form-group mt-3 fas" style="text-align: center;">
                        <label for="file-upload" class="custom-file-upload">
                             <i class="fa fa-cloud-upload"></i> +dodaj "Thumbnail"
                         </label>
                      <input class="up" id="file-upload" type="file"  name="thumbnail"  required/>
                          <div class="invalid-feedback">
                                  Nijedna datoteka nije odabrana*
                             </div>
                        </div>

<div class= "row epb">

               
<div class="col-4 form-group" style="
    margin: auto;
">
            <button type="submit" class="btn editB " id ="uploadB">POTVRDI</button>
            </div>
            <div class="col-4 form-group" style="
    margin: auto;
">
<!--  <form action="/admin/photos/delete/{{$data->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" value="{{ csrf_token() }}" name="_token">  -->
<button type="submit" class="btn btnError" >OBRISI</button>
<!-- </form>  -->
</div>   

</div>
</div>
<div class= "divEditAlbum">
     
<img  src="/images/thumbnail/{{$data->thumbnail}}" style="    width: 100%;
"/> 
</div>  
</div>
</form>
        </div>

</main>

@endsection