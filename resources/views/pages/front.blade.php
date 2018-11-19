<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Selecta DNB</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">    
</head>
<body>

{{-- @section('body_class', 'front-page') --}}
    
  <div class="front-meta">
    <div class="front-container text-center">
      <div class="front-top">
        {{-- <img src="{{ url('/images/sdnbtitle.png') }}" alt="" srcset=""> --}}
        <div class="title-image"></div>
      </div>

      <div class="front-bottom">
        <p >base index page, pages controller.</p>
      </div>
    </div>
  </div>

</body>
</html>