<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/globalResponsive.css') }}">
    <title>Landy Page Doctor - {{ $title }}</title>
  
</head>
<body>
    
    <x-header />    

    <main>

         {{ $slot }}

    </main>


    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>