@extends('layouts.app')

@section('content')
    <main style="padding-top: 20px;">
            <div class="container-fluid memd">
                    <div class = "row" style ="padding-bottom:20px">
                      <a class = "btn back " href = "/home" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Nazad</a>

                     </div>
                      <div class="row">
                            <div class= "divEditAl">
                        <form action=" /admin/photos/updatePhoto/{{$data->id}}" name=" /admin/photos/updatePhoto/{{$data->id}}"  method="POST" enctype="multipart/form-data" >
                    
                                    @csrf
                                    <div class="form-group">   
                                    <input type="text" class="form-control" style="background-color: white; color:black" name="title" value="{{$data->title}}" id = "title" required>
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" style="background-color: white; color:black" value="{{$data->location}}" name="location" id = "location" required>
                                    </div>
                                        @if($data->url)
                                    <div class="form-group">
                                    <label style="color:white" for="location">Video Url</label>     
                                    <input type="text" class="form-control" style="background-color: white; color:black" value="{{$data->url}}" name="url" id = "url" required>
                                    </div>
                                    @endif
                                    <div class="form-group mt-3 fas" style="text-align: center;">
                                    <label  class="custom-file-upload">
                                    <i class="fa fa-cloud-upload"></i> +dodaj "Thumbnail"
                                    </label>
                                    <input class="up" type="file"  name="thumbnail"  />
                                    <div class="invalid-feedback">
                                    Nijedna datoteka nije odabrana*
                                    </div>
                                    </div>

                                    <div class="form-group mt-3 fas" style="text-align: center;">
                      <label class="custom-file-upload">
                         <i class="fa fa-cloud-upload"></i> +dodaj Sliku
                         </label>
                      <input type="file" class="up" name="photo" id="photo" >
                         <div class="invalid-feedback">
                             Nijedna datoteka nije odabrana*
                             </div>
                      </div>

                                    <div class= "row epb"> 
                                        <div class="col-4 form-group" style="margin: auto;">
                                        <button type="submit" class="btn editB " id ="uploadB">POTVRDI</button>
                                        </div>
                                        </div>   

                                
                            </form>
                                    
                            <div class="col-4 form-group" style="margin: auto;padding-top:20px">
                                <form action="/admin/photos/delete/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="{{ csrf_token() }}" name="_token">  
                                        <button type="submit" class="btn btnError" >OBRISI</button>
                                    </form>  
                                </div>   
                        </div> 
                        <div class= "divEditAlbum">
                              <img  src="/images/thumbnail/{{$data->thumbnail}}" style="width: 100%;"/> 
                         </div>  
              
                         </div> 
                        </div>

    </main>

    @endsection