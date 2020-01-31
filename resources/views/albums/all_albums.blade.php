@extends('layouts.main')

@section('content')
<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
@if(count($albums)>0)
<?php 
$colcount = count($albums);
$i = 1;
?>

  <main class="myMain">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
        @foreach($albums as $album)
        @if($i == $colcount)
        <div class="col-4 col-md-4 col-lg-4" data-aos="fade-up">
        <a href="/admin/albums/{{$album->id}}" class="d-block photo-item">
            <img src="/images/{{$album->cover_image}}" alt="{{$album->name}}" class="img-fluid">
       
              <div class="photo-text-more">
              <h3 class="heading">{{$album->name}}</h3>
              <span class="meta">42 Photos</span>
            </div>
  
          </a>
          @else 
          <div class="col-4 col-md-4 col-lg-4" data-aos="fade-up">
          <a href="/admin/albums/{{$album->id}}" class="d-block photo-item">
            <img src="/images/{{$album->cover_image}}" alt="{{$album->name}}" class="img-fluid">
       
              <div class="photo-text-more">
              <h3 class="heading">{{$album->name}}</h3>
              <span class="meta">42 Photos</span>
            </div>
  
          </a>
          
          
          @endif
          @if($i % 3 == 0)
</div></div>
<div class="row align-items-stretch">
@else
</div>
@endif 
<?php $i++;?>
@endforeach
     

      </div>
  </main>
  @else 
  <p style = "color:white">No photos</p>
  @endif

</div>
@endsection