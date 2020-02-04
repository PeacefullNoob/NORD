@extends('layouts.main')

@section('content')
 
<section id ="myIndex" class= "heroImage">
      <div class = "shadow-overlay"></div>

    <div class="home-content"  data-aos="fade-right">
      <div class="row home-content__main">
          <h1>
          We are here for you!
          </h1>

          <p>  Professional Drone Filming
          <br>
          Drone Photography
          & Video Production</p>
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
</section>
<div class="site-wrap">  


    @if(count($photos)>0)
          <?php 
          $colcount = count($photos);
          $i = 1;
          ?>
    <main class="main-content">
        <div class="container-fluid photos">
          <div class="row align-items-stretch glavniR">
            @foreach($photos as $photo)
            @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg') 
              <div class="col-4 col-sm-4 col-md-4" data-aos="fade-up" >
                  <div id="mediaContainer" class= "mediaDiv glry-img"> 
                        <img class="picInd" onclick="changeIt(this)"  src="/images/{{$photo->photo}}" alt="{{$photo->title}}"  >
                        <div class=" overlay">
                          <div class = "col-md-6 headOver" >
                            <h4 class="heading">{{$photo->title}}</h4>
                            </div>
                            <div class = "col-md-6 bodyOver">
                            <p class="locationPic">lokacija</p>
                            <p class="datumPic">{{$photo->updated_at}}</p>
                            </div>
                          </div>  
                    </div> 
@else 
                <div class="col-4 col-sm-4 col-md-4" data-aos="fade-up">  
                    <div id="mediaContainer" class= "mediaDiv  "> 
                        <video class="picInd"  data-toggle="modal" data-target="#modal1" data-myvalue="/images/{{$photo->photo}}"   src="/images/{{$photo->photo}}" > 
                          </video >
                          <div class=" overlay">
                          <div class = "col-md-6 headOver" >
                            <h4 class="heading">{{$photo->title}}</h4>
                            </div>
                            <div class = "col-md-6 bodyOver">
                            <p class="locationPic">lokacija</p>
                            <p class="datumPic">{{$photo->updated_at}}</p>
                            </div>
                          </div>   
                  </div> 
    @endif
   @if($i % 3 == 0)
   @if($i==$colcount)
   </div> 
   @else
          </div>
              </div>
            <div class="row align-items-stretch glavniR" >
            @endif 
        @else
            </div>
      @endif 
      
      <?php $i++;?>
@endforeach
</div>
</div>
</main>
@else 
<p style = "color:white">No photos</p>
@endif
</div>
@endsection 