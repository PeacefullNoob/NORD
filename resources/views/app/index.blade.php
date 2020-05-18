@extends('layouts.main')
@section('index.css')
<link rel="stylesheet" href="/css/index.css">
@endsection
@section('content')
@yield('index.css')

<div class="site-wrap">
  <section class="section-1" id="section-1">

    <div id="myIndex" class="herovideo">
      <div class="naslov">
        <h3>
          Mi posmatramo svijet kroz piksele
        </h3>
        <h1>NORD PIXELS
        </h1>
      </div>
      <ul class="home-social">
        <li><a href="https://www.facebook.com/pg/nordphotosandvideos/about/?ref=page_internal" target="_blank">
            <i class="fa fa-facebook"></i>
            <span class="home-social-text"></span>
          </a></li>
        <li><a href="https://www.instagram.com/nordphotosandvideos/?fbclid=IwAR3h3gXVaK-BhBNbWXY9N3IFy9J-_5BhxMgx0prGpiya6tSwY_nsjr0xtC4" target="_blank">
            <i class="fa fa-instagram"></i>
            <span class="home-social-text"></span>
          </a></li>
        <li><a href="https://www.youtube.com/channel/UClx7DimS-Cl0dx2H13Bz1PQ" target="_blank">
            <i class="fa fa-youtube"></i>
            <span class="home-social-text"></span>
          </a></li>
      </ul>
      <div class="scrollDiv">
        <a href="#section-2" class="mouse smoothscroll">
          <span class="mouse-icon">
            <span class="mouse-wheel"></span>
          </span>
          <h5>Scroll down</h5>

        </a>

      </div>
    </div>
  </section>
  <section class="section-2" id="section-2">

    @if(count($albums)>0)
    <?php
    $colcount = count($albums);
    $i = 1;
    ?>
    <div class="jumbotron ourLate">
      <div class="container">
        <h2>Our latest projects</h2>
        <hr class="my-4">


      </div>
    </div>
    <main class="main-content">
      <div class="container-fluid ">


        <div class="glavniR" id="glavni">
          @foreach($albums as $album)
          <div class="col-sm-6	col-md-4	col-lg-3	col-xl-3  index {{$album->id}}" data-aos="zoom-in-up" data-aos-once="true">
            <div id="mediaContainer" class="mediaDiv glry-img">
              <a class="cat" href="/app/gallery_media/{{$album->id}}">
                <img class="picInd" data-src="/images/cover_image/{{$album->cover_image}}">
                <div class="overlay">
                  <div class="col-md-6 headOver">
                    <h4 class="heading">{{$album->name}}</h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php
          if ($i++ == 4)
            break;
          ?>

          @endforeach
        </div>
      </div>
    </main>

    @else
    <p style="color:white">No photos</p><!--  -->
    @endif
  </section>

  <section class="section-3" id="section-3">
    <div class="jumbotron ">
      <div class="container">
        <h2>About Nord Pixels</h2>
        <hr class="my-4">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio facilisis mauris sit amet massa. Erat velit scelerisque in dictum non consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo. Convallis tellus id interdum velit laoreet. Proin sagittis nisl rhoncus mattis rhoncus urna</p>
      </div>
    </div>
    <div class="row">
      <div class="col-6"></div>
      <div class="col-6"></div>
    </div>

  </section>
  <section class="section-4" id="section-4">
    <div class="jumbotron ">
      <div class="container">
        <h2>Our Gear</h2>
        <hr class="my-4">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio facilisis mauris sit amet massa. Erat velit scelerisque in dictum non consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo. Convallis tellus id interdum velit laoreet. Proin sagittis nisl rhoncus mattis rhoncus urna</p>
      </div>
    </div>
    <div class="row">
      <div class="col-3"></div>
      <div class="col-3"></div>
      <div class="col-3"></div>
      <div class="col-3"></div>
    </div>

  </section>
</div>
</div>
@endsection