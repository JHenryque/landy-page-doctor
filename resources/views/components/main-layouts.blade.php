<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/globalResponsive.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="fontawesome/css/brands.css" rel="stylesheet" />
    <link href="fontawesome/css/solid.css" rel="stylesheet" />
     <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet" />
    <title>Landy Page Doctor - {{ $title }}</title>
  
</head>
<body>
    
    <x-header />    

    <main>

         {{ $slot }}

    </main>


 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>