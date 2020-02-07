<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/css/normalize.css"> 
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">

        <link rel="stylesheet" href="/css/gallery.css">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/jquery-ui.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:300,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/aos.css">
        <link rel="stylesheet" href="/css/fancybox.min.css">

        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<title> Nord </title>
</head>
  <body onload="myFunction()" >
      <div id="loader-wrapper">     
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div> 
      </div>


      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-body mb-0 p-0">
                     <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe id = "iframeModal" class="embed-responsive-item" src=""
                        allowfullscreen></iframe>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-sm" style = "color: white;
    background: black;position: absolute;top: 2; right: 2;"data-dismiss="modal">Close</button>
                   </div>
               <!--   <div class="modal-footer justify-content-center">   
                     <button type="button" class="btn btn-outline-primary btn-rounded btn-sm" data-dismiss="modal">Close</button>
                    </div>
 -->
               </div>


            </div>
        </div>

        @include('layouts.header')
        <!-- class="row" je stojao  -->
          <div id = "glavniDiv" class = "container-fluid">
            @include('layouts.messages')
            @yield('content')
            </div>

        @include('layouts.footer')

    </body>


</html>