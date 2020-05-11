@extends('layouts.main')
@section('header.css')
<link rel="stylesheet" href="/css/header.css">
@endsection
@section('content')
@yield('header.css')

<div class="site-wrap">
  <div id="myIndex">
    <div class="coverAl ">
      <div class="coverAlbum">
        <img src="/images/{{$album->cover_image}}" alt="">
      </div>
      <div class="naslov">
        <h1>{{$album->name}}</h1>
        <h3>{{$album->description}} </h3>
      </div>

    </div>

  </div>
  @if(count($photos)>0)


  <main class="main-content">


    <div class="glavniR" id="glavniAl">
      @foreach($photos as $photo)
      @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg'|| $photo->media_type == 'PNG')

      <div class=" media {{$photo->album_id}}" data-aos="zoom-in-up" data-aos-once="true">
        <div id="mediaContainer" class="mediaDiv glry-img mediap">
          <img class="picInd" onclick="changeIt(this)" data-src="/images/{{$photo->photo}}" data-value="{{$photo->id}}" name="/images/{{$photo->photo}}" alt="{{$photo->title}}">
          <div class="overlay">
            <div class="col-md-6 headOver">
              <h4 class="heading">{{$photo->title}}</h4>
            </div>
            <div class="col-md-6 bodyOver">
              <p class="locationPic"> {{$photo->location}} <i class="fa fa-map-marker" aria-hidden="true"></i></p>
              <p class="datumPic"> {{$photo->updated_at}} <i class="fa fa-calendar" aria-hidden="true"></i></p>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="media {{$photo->album_id}}" data-aos="zoom-in-up" data-aos-once="true">
        @if($photo->photo == "null")
        <div id="mediaContainer" class="mediaDivV mediap" data-toggle="modal" data-target="#modal1" data-myvalue="https://www.youtube.com/embed/{{$photo->url}}" data-index="{{$photo->id}}">
          <img class="picInd" src="{{$photo->thumbnail}}" />
          @else
          <div id="mediaContainer" class="mediaDivV" data-toggle="modal" data-target="#modal1" data-myvalue="/images/{{$photo->photo}}" data-index="{{$photo->id}}">
            <img class="picInd" data-src="/images/thumbnail/{{$photo->thumbnail}}" />
            @endif
            <span class="ikonica"><img src="/images/Play-BUTTON.svg"></span>
            <div class="overlay">
              <div class="col-md-6 headOver">
                <h4 class="heading">{{$photo->title}}</h4>
              </div>
              <div class="col-md-6 bodyOver">
                <p class="locationPic"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$photo->location}}</p>
                <p class="datumPic"> <i class="fa fa-calendar" aria-hidden="true"></i> {{$photo->updated_at}}</p>
              </div>
            </div>
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