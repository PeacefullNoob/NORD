@extends('layouts.main')
@section('header.css')
<link rel="stylesheet" href="/css/header.css">
@endsection
@section('content')
@yield('header.css')

<div class="site-wrap">
  <div id="myIndex">

    <div class="jumbotron ">
      <div class="container ">
        <div class="gallery_naslov">

          <h1>{{$album->name}}</h1>
          <hr class="my-4">
          <p>{{$album->description}}</p>
        </div>



      </div>
    </div>
  </div>
  <div class="hori_divider">
    <div class="divider"></div>
  </div>
  @if(count($photos)>0)


  <main class="main-content">


    <div class="glavniR" id="glavniAl">
      @foreach($photos as $photo)
      @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg'|| $photo->media_type == 'PNG')

      <div class=" media {{$photo->album_id}}" data-aos="zoom-in-up" data-aos-once="true">
        <div class="mediaDiv glry-img mediap">
          <img class="picInd" data-src="/images/{{$photo->photo}}" data-value="{{$photo->id}}" name="/images/{{$photo->photo}}" alt="{{$photo->title}}">

        </div>
      </div>
      @else
      <div class="media {{$photo->album_id}}" data-aos="zoom-in-up" data-aos-once="true">
        @if($photo->photo == "null")
        <div class="mediaDivV mediap" data-toggle="modal" data-target="#modal1" data-myvalue="https://www.youtube.com/embed/{{$photo->url}}" data-index="{{$photo->id}}">
          <img class="picInd" src="{{$photo->thumbnail}}" />
          @else
          <div class="mediaDivV" data-toggle="modal" data-target="#modal1" data-myvalue="/images/{{$photo->photo}}" data-index="{{$photo->id}}">
            <img class="picInd" data-src="/images/thumbnail/{{$photo->thumbnail}}" />
            @endif
            <span class="ikonica"><img src="/images/Play-BUTTON.svg"></span>

          </div>
        </div>

        @endif
        @endforeach
      </div>
  </main>

  @else
  <p style="color:white">No photos</p>
  @endif
</div>
</div>
@endsection