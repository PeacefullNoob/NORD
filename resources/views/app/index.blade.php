@extends('layouts.main')

@section('content')

<div class="site-wrap">
  <section class="section-1" id="section-1">

    <div id="myIndex" class="herovideo">
      <!--      <img src="/images/47.png" alt=""> -->
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
    <main class="main-content">

      <div class=" jumbotron-fluid ourLate">
        <div class="container-fluid ">
          <h1>Our latest projects</h1>
          <hr class="my-4">


        </div>
      </div>
      <div class="container-fluid ">


        <div class="glavniR">
          @foreach($albums as $album)
          <div class="col-sm-6	col-md-4	col-lg-3	col-xl-3   {{$album->id}}" data-aos="zoom-in-up" data-aos-once="true">
            <div id="mediaContainer" class="mediaDiv glry-img">
              <a class="cat" href="/app/gallery_media/{{$album->id}}">
                <img class="picInd" data-src="/images/cover_image/{{$album->cover_image}}" alt="Cover picture">
                <div class="overlay_index">
                  <div class=" headOver">
                    <img src="/images/cover_image/logos/{{$album->logo_image}}" alt=" Logo Image">
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
          <div class="showMore">
            <h4><a href="/galeries"> Show more </a></h4>
          </div>
        </div>
      </div>
    </main>

    @else
    <p style="color:white">No photos</p><!--  -->
    @endif
  </section>

  <section class="section-3" id="section-3">
    <main class="main-content">

      <div class=" jumbotron-fluid ourLate">
        <div class="container-fluid">
          <h1>About Nord Pixels</h1>
          <hr class="my-4">

          <p>VIDEO PRODUCTION
            There is so much spectacular ways to see things. There are many stories that nature wants you to remember and we are here to document every single one of them. We are highly motivated individuals inspired by nature, architecture & buildings, exteriors, interiors, food and people. We tell outdoor stories in a way that is relatable to your audience. Customer's approach to every task we are working on is crucial thing for success. If you are someone who appreciate these values, we would love to work with you.
          </p>
          <p>
            PHOTO SESSIONS
            Transfering an ambient, experience or atmosphere in just a single framerate could be very difficult. Despite that, we are always ready for the challenge. Higher challenges motivate us even more so we are always hyped up about these kind of tasks. Even if you think you have a really hard one for us, bring it on because one thing is for sure - there is nohing that can surprise us.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-3 m-3 "> <img class="card-img-top" src="/images/aleksandarseter.jpg" alt="Card image cap">
        </div>
        <div class="col-3 m-3 "> <img class="card-img-top" src="/images/andrej.jpeg" alt="Card image cap">
        </div>
        <div class="col-3 m-3 "> <img class="card-img-top" src="/images/NadaVojinovic.jpg" alt="Card image cap">
        </div>
      </div>
    </main>
  </section>

  <section class="section-4" id="section-4">
    <div class="jumbotron ">
      <div class="container">
        <h1>Our Gear</h1>
        <hr class="my-4">

      </div>
    </div>
    <div class="row">

    </div>

  </section>
</div>
</div>
@endsection