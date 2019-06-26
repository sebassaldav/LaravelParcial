<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
       .activo a {
           color: red;
           text-decoration: none;
       }
   </style>

    <title>@yield('titulo', 'Tienda')</title>
</head>
<body>

    @include('partials/nav')

   @yield('contenido')
   
    
</body>
</html>