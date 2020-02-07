@extends('layouts.main')

@section('content')

@if(count($albums)>0)
<main class="main-content1">
        <div class="container-fluid photos">
      <div class="allAlRow">
        @foreach($albums as $album)
   
        <div class="allAlCol" data-aos="fade-up">
        <a href="/admin/albums/{{$album->id}}" >
            <img src="/images/{{$album->cover_image}}" alt="{{$album->name}}" class="allAlimg">       
              <div class="photo-text-more">
              <h3 class="heading">{{$album->name}}</h3>
</div>
 </a>   
</div>
@endforeach
      </div>
      </div>
  </main>
  @else 
  <p style = "color:white">No photos</p>
  @endif


@endsection