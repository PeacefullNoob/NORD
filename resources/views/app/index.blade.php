@extends('layouts.main')

@section('content')
<div class="site-wrap" >  
<div id ="myIndex" class= "herovideo">
    <!--  <div class = "shadow-overlay"></div>  -->
      <video playsinline autoplay="autoplay" loop  muted id="bgvideo" width="x" height="y">
<source src="/images/00004b.mp4" type="video/mp4">
</video>
    <div class="home-content">
      <div class="row home-content__main">
      <div class ="naslov">
          <h1>
          Outdoor & Real estate 

          </h1>
          <h3>Photos & Video productions

          </h3>
</div>
          <p>At Nord we specialize in photo sessions and video productions for outdoor</br> & real estate experiences. With our knowledge, creativity and experience
          </br> we can always bring beautiful, exciting and compelling visual stories for your brand.</p></br>
        </div> 
      </div>
  <ul class="home-social">
    <li class="home-social-title">Follow Us</li>
    <li><a href="https://www.facebook.com/pg/nordphotosandvideos/about/?ref=page_internal" target="_blank">
    <i class="fa fa-facebook"></i>
    <span class="home-social-text">Facebook</span>
    </a></li>
    <li><a href="https://www.instagram.com/nordphotosandvideos/?fbclid=IwAR3h3gXVaK-BhBNbWXY9N3IFy9J-_5BhxMgx0prGpiya6tSwY_nsjr0xtC4" target="_blank">
    <i class="fa fa-instagram"></i>
    <span class="home-social-text">Instagram</span>
    </a></li>
  </ul>
</div>
    @if(count($photos)>0)
         
</div>
   <main class="main-content">
        <div class="container-fluid photos">
        
        <div id="myBtnContainer">
        <div class="dx">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  @if(count($albums)>0)
  @foreach($albums as $album)

  <button class="btn" onclick="filterSelection('{{$album->id}}')">{{$album->name}} </button>

  @endforeach
@endif
</div> 
</div> 
          <div class="glavniR" id="glavni">
            @foreach($photos as $photo)
            @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg'|| $photo->media_type == 'PNG') 

            <div class="mojCol {{$photo->album_id}} animated zoomIn" data-aos="zoom-in-up" data-aos-once="true" >
                  <div id="mediaContainer" class= "mediaDiv glry-img"> 
                        <img class="picInd" onclick="changeIt(this)"  data-src="/images/thumbnail/{{$photo->thumbnail}}" data-value="{{$photo->id}}" name="/images/{{$photo->photo}}"  alt="{{$photo->title}}"  >
                        <div class="overlay">
                          <div class = "col-md-6 headOver" >
                            <h4 class="heading">{{$photo->title}}</h4>
                            </div>
                            <div class = "col-md-6 bodyOver">
                            <p class="locationPic"> {{$photo->location}} <i class="fa fa-map-marker" aria-hidden="true"></i></p>
                            <p class="datumPic">  {{$photo->updated_at}} <i class="fa fa-calendar" aria-hidden="true"></i></p>
                            </div>
                          </div>  
                          </div>  
                           </div>  
@else 
                <div class="mojCol {{$photo->album_id}} animated zoomIn" data-aos="zoom-in-up" data-aos-once="true">           
                    <div id="mediaContainer" class= "mediaDivV">      
                      @if($photo->photo == "null")                
                      <img class="picInd"  data-toggle="modal" data-target="#modal1" data-myvalue="https://www.youtube.com/embed/{{$photo->url}}" data-index ="{{$photo->id}}"   data-src="/images/thumbnail/{{$photo->thumbnail}}" /> 
                      @else
                      <img class="picInd"  data-toggle="modal" data-target="#modal1" data-myvalue="/images/{{$photo->photo}}" data-index ="{{$photo->id}}"   data-src="/images/thumbnail/{{$photo->thumbnail}}" /> 
                        @endif
                        <span class="ikonica"><img src="/images/Play-BUTTON.svg" ></span>
                          <div class="overlay">
                          <div class = "col-md-6 headOver" >
                            <h4 class="heading">{{$photo->title}}</h4>
                            </div>
                            <div class = "col-md-6 bodyOver">
                            <p class="locationPic"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$photo->location}}</p>
                            <p class="datumPic"> <i class="fa fa-calendar" aria-hidden="true"></i> {{$photo->updated_at}}</p>
                            </div>
                            </div>                       
                          </div>    
                          </div>  

      @endif    
@endforeach
</div>
</div>
</main>   

@else 
<p style = "color:white">No photos</p>
@endif
</div>
@endsection 