<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('title')
    <title>@yield('title2')</title>
    <link rel="stylesheet"  href="css/save.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
@include('header.header')
<div class="container">

<div class="txt3">
@if($existencia>=null)
Ya tenemos registrado una solicitud  de pre-inscripcion para este nro. de documento
@endif

<a  id="btn_volver" href="{{route('index')}}" class="btn btn-primary">Volver</a>
</div>

</div>

@include('footer.footer')    
</body>
</html>