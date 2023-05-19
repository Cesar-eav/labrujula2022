<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="title" content="LaBrujula.tk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La Brújula, encuentra todos los tesoros de Valparaíso. Street art, escaleras, murales, ascensores, miradores y mucho más. Murales cerro alegre, valparaíso. Mon laferte. Ruta murales valparaiso. Valparaíso arte. Mural abuela valparaíso. " >
    <meta name="keywords" content="Valparaiso, murales, mon laferte, rutas, ascensores, funiculares, eslacera calle 13, escalera de colores, valparaiso arte"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


    <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-RCZ6EYBXLP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RCZ6EYBXLP');
</script>


    <script src="https://unpkg.com/flowbite@1.6.3/dist/flowbite.js"></script>

    

    <title>La Brújula.tk, encuentra todos los tesoros de Valparaíso. Street art, escaleras, murales, ascensores, miradores y mucho más.</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts SECURE -->
    <script src="{{ '/js/app.js' }}" defer></script>

    <!-- Styles SECURE-->
    <link href="{{ '/css/app.css' }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>


<body>

    <div id="app" class="MASTER">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div>

</body>

</html>
