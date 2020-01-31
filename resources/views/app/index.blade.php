@extends('layouts.main')

@section('content')
 
<section id ="myIndex" class= "heroImage" data-parralax = "scroll" data-image-src = "/images/100_0009_20191007194656_1580218428.jpg" >
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
<li><a href="#0">
<i class="fab fa-facebook"></i>
<span class="home-social-text">Facebook</span>
</a></li>
<li><a href="#0">
<i class="fab fa-instagram"></i>
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
      <div class="row align-items-stretch">
        @foreach($photos as $photo)
       
        @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg') 
        <div class="col-4 col-sm-4 col-md-4" data-aos="fade-up" >
            <div id="mediaContainer" class= "mediaDiv glry-img"> 
            <img class="picInd" onclick="changeIt(this)"  src="/images/{{$photo->photo}}" alt="{{$photo->title}}"  >
     
             <div class="overlay">
              <h3 class="heading">{{$photo->title}}</h3>
          <!--     <span class="meta">{{$photo->media_type}}</span> -->
            </div>  
            </div> 
         
          @else 

      <div class="col-4 col-sm-4 col-md-4" data-aos="fade-up">  
    <div id="mediaContainer" class= "mediaDiv  "> 
      <video class="picInd"  data-toggle="modal" data-target="#modal1" data-myvalue="/images/{{$photo->photo}}"   src="/images/{{$photo->photo}}" > 
    
      </video >
      <div class="overlay">
              <h3 class="heading">{{$photo->title}}</h3>
             <!--  <span class="meta">{{$photo->media_type}}</span> -->
            </div>  
            
     
                  <!-- <div class="playpause"> </div>  -->
<!--                 <button id ="button1" class="active"  data-toggle="modal" data-target="#modal1" data-myvalue="/images/{{$photo->photo}}"></button> 
 -->                  </div> 
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

  @else 
  <p style = "color:white">No photos</p>
  @endif
</div>
  </main>
@endsection