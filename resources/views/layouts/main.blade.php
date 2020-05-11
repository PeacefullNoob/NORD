<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:image" content="https://nordpixels.me/images/nordLogoK.png" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://nordpixels.me/" />

  <link rel="icon" type="image/png" href="/images/Bar-ikonica.png" />
  <link rel="apple-touch-icon-precomposed" href="/images/Bar-ikonica.png" type="image/png" sizes="152x152" />
  <link rel="apple-touch-icon-precomposed" href="/images/Bar-ikonica.png" type="image/png" sizes="120x120" />
  <link rel="apple-touch-icon" href="/images/Bar-ikonica.png" sizes="180x180" />


  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/gallery.css">
  <link rel="stylesheet" href="/css/responsive.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/jquery-ui.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/aos.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title> Nord </title>
  {!! htmlScriptTagJsApi([
  'action' => 'homepage',
  'callback_then' => 'callbackThen',
  'callback_catch' => 'callbackCatch'
  ]) !!}
</head>

<body>


  <div id="loader-wrapper">
    <img id="loader" src="/images/animacija/minic.gif " />
  </div>


  <div class="modal fade" id="modal1" style="height: 100%; background-color: black;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body mb-0 p-0">
          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe id="iframeModal" class="embed-responsive-item" src="" allowfullscreen></iframe>
          </div>
          <button type="button" class="btn btn-outline-primary btn-rounded btn-sm" style="font-size: 20px;color: white;
  border:none;  position: absolute;top: 2; right: 2;" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
          </button>
        </div>

      </div>


    </div>
  </div>

  @include('layouts.header')
    @include('layouts.messages')
    @yield('content')


  @include('layouts.footer')

</body>


</html>