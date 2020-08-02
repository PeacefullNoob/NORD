@extends('layouts.app')

@section('content')

<main class="myMain adminMain mem">
  <div class="container-fluid  padding20">
    <div class="row" style="padding-bottom:20px">

      <a class="btn back " href="/admin/albums/all_albums"><i class="fa fa-arrow-left" aria-hidden="true"></i> Nazad</a>
    </div>
    <div class="row align-content-center" style="padding-bottom:20px">

      <h1 class="admin_h1">{{$album->name}}</h1>
      <div class="col-md-6 editAlbum ">
        <a href="/admin/albums/edit_album/{{$album->id}}">
          <button type="button" class="btnEdit">Uredi Album</button>
        </a>
      </div>
    </div>
  
  </div>
</main>
<div class="container">
  <div class="row w-100">
      <div class="col-md-12">
        <div class="row w-100 " style="    border: 1px solid white;  background-color: #134284;">
          <div class="col-1 colLi">#
          </div>
          <div class="col-3 colLi">
            Naziv
          </div>
          <div class="col-5 colLi">
            Slika
          </div>
          <div class="col-3 colLi">
            Uredi Sliku
          </div>
        </div>
          <ul class="sort_menu list-group">
        
            @foreach ($photos as $photo)
            <li class="list-group-item" data-id="{{$photo->id}}">
              <div class="row w-100">
                <div class="col-1 colLi"> <span class="handle"></span></div>
             <div class="col-3 colLi">  {{$photo->title}}</div> 
             @if($photo->media_type == 'png'|| $photo->media_type == 'jpg' || $photo->media_type == 'svg'|| $photo->media_type == 'PNG'|| $photo->media_type == 'mp4')
             <div class="col-5 colLi"> 
               <img src="/images/thumbnail/{{$photo->thumbnail}}" class="adminImageLi" />
             </div>
             @else
             <div class="col-5 colLi"> 
              <img src="{{$photo->thumbnail}}" class="adminImageLi" />
              YT
            </div>
            @endif

                <div class="col-3 colLi"> 
                  <a href="/admin/photos/edit_photo/{{$photo->id}}"> 
                  <img class="imgEdit" style="color:white;" src="/images/iconfinder_edit_2561427.svg" alt="Edit picture"/>
                 
                </a>
                  </div> 

              </div>
            </li>
   
            @endforeach
          </ul>

      </div>
  </div>
</div>
<style>
  .sort_menu{
    border: 1px solid white;

  }
  .list-group-item {
      display: flex;
      align-items: center;
      background-color: transparent;
      border-bottom: 1px solid white;
  }
  .colLi{
    text-align: center;
    border-right: 1px solid white;
    margin: auto
  }
  .liHead{
    border: 1px solid;
    border-color: white !important;
  }
  .highlight {
      min-height: 30px;
      background-color: black
      list-style-type: none;
  }

  .handle {
      min-width: 18px;
      background: #607D8B;
      height: 15px;
      display: inline-block;
      cursor: move;
      margin-right: 10px;
  }
</style>
<script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>


  function updateToDatabase(idString){
     $.ajaxSetup({ headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}});
    
     $.ajax({
          url:'{{url('/admin/menu/update-order')}}',
          method:'POST',
          data:{ids:idString},
          success:function(){
             alert('Successfully updated')
              //do whatever after success
          }
       })
  }

    var target = $('.sort_menu');
    target.sortable({
        handle: '.handle',
        placeholder: 'highlight',
        axis: "y",
        update: function (e, ui){
           var sortData = target.sortable('toArray',{ attribute: 'data-id'})
           updateToDatabase(sortData.join(','))
        }
    })
    
</script>

@endsection