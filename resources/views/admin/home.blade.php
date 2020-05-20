@extends('layouts.app')

@section('content')
@include('layouts.google_analytics')

<main class="myMain adminMain mem">
  <div class="container-fluid  padding20">
    <div class="row" style="padding-bottom:20px">

      <a class="btn btnDodajMedia" href="/admin/albums/all_albums">Svi Albumi</a>

    </div>
    <div class="row" style="padding-bottom:20px">

      <a class="btn btnDodajMedia" href="/admin/photos/upload_p/">+Dodaj video/fotografiju</a>

    </div>


  </div>
</main>

@endsection