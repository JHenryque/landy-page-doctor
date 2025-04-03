<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/globalResponsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>Landy Page Doctor - {{ $title }}</title>
  
</head>
<body>
    
    <x-header />    

    <main class="carousel-container">

         {{ $slot }}

    </main>


    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>