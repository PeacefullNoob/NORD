@extends('layouts.main')
@section('header.css')
<link rel="stylesheet" href="/css/header.css">
@endsection
@section('content')
@yield('header.css')

<div class="site-wrap ">
  <div id="myIndex">

      <div class=" alDesc ">
        <div class="gallery_slika  col-sm-12 col-md-12 col-lg-4 col-xl-4 my-5 h-100">

      <div class="gslika">       
     <img class="album_cover" src="/images/cover_image/logos/{{$album->logo_image}}" alt="{{$album->logo_image}}">
</div>
        </div>
        <div class="gallery_naslov col-sm-12 col-md-12 col-lg-7 col-xl-7 ">

          <p>{{$album->description}}</p>

        </div>


    </div>
  </div>

  @if(count($photos)>0)


  <main class="main-content ">


    <div class="glavniR" id="glavniAl">
      @foreach($photos as $photo)
      @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg'|| $photo->media_type == 'PNG')

      <div class=" media {{$photo->album_id}}" data-aos="zoom-in-up" data-aos-once="true">
        <div class="mediaDiv glry-img mediap">
          <img class="picInd" src="/images/{{$photo->photo}}" data-value="{{$photo->id}}" name="/images/{{$photo->photo}}" alt="{{$photo->title}}">

        </div>
      </div>

      @else
      <div class="media {{$photo->album_id}}" data-aos="zoom-in-up" data-aos-once="true">
        @if($photo->photo == "null")
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$photo->url}}"></iframe>
        </div>
        @endif

      </div>


      @endif
      @endforeach
    </div>
  </main>
  @else
  <div class="h-50">
    <p style="color:white">No media</p>

  </div>
  @endif
</div>
</div>
@endsection