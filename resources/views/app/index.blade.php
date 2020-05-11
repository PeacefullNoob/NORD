@extends('layouts.main')
@section('index.css')
<link rel="stylesheet" href="/css/index.css">
@endsection
@section('content')
@yield('index.css')

<div class="site-wrap">
  <div id="myIndex" class="herovideo">
    <video playsinline autoplay="autoplay" loop muted id="bgvideo" width="x" height="y">
      <source src="/images/Tajmlaps2.mp4" type="video/mp4">
    </video>
    <div class="home-content">
      <div class="row home-content__main">
        <div class="naslov">
          <h1>
            Photo & Video productions

          </h1>
          <h3>Product and Real Estate video & photography specialists

          </h3>
        </div>
        <p>At Nord we specialize in photo sessions and video productions for product, indoor and outdoor experiences.</br> With our knowledge,
          creativity and experience we can always bring beautiful, exciting and compelling visual stories for your brand.</p></br>
      </div>
    </div>
    <ul class="home-social">
      <li><a href="https://www.facebook.com/pg/nordphotosandvideos/about/?ref=page_internal" target="_blank">
          <i class="fa fa-facebook"></i>
          <span class="home-social-text">Facebook</span>
        </a></li>
      <li><a href="https://www.instagram.com/nordphotosandvideos/?fbclid=IwAR3h3gXVaK-BhBNbWXY9N3IFy9J-_5BhxMgx0prGpiya6tSwY_nsjr0xtC4" target="_blank">
          <i class="fa fa-instagram"></i>
          <span class="home-social-text">Instagram</span>
        </a></li>
      <li><a href="https://www.youtube.com/channel/UClx7DimS-Cl0dx2H13Bz1PQ" target="_blank">
          <i class="fa fa-youtube"></i>
          <span class="home-social-text">Youtube</span>
        </a></li>
    </ul>
  </div>
  @if(count($albums)>0)


  <main class="main-content">
    <div class="container-fluid photos">


      <div class="glavniR" id="glavni">
        @foreach($albums as $album)
        <div class="mojCol index {{$album->id}}" data-aos="zoom-in-up" data-aos-once="true">
          <div id="mediaContainer" class="mediaDiv glry-img">
            <a class="cat" href="/app/gallery_media/{{$album->id}}">
              <img class="picInd" data-src="/images/{{$album->cover_image}}">
              <div class="overlay">
                <div class="col-md-6 headOver">
                  <h4 class="heading">{{$album->name}}</h4>
                </div>
              </div>
            </a>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </main>

  @else
  <p style="color:white">No photos</p>
  @endif
</div>
</div>
@endsection