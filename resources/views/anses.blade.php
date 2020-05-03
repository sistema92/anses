<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    @include("title")
     <title>@yield('title')</title>
</head>
<body>
    @include("header.header")
    @include("error")
    

    <div class="container">

        <p class="txt1">Pre-Inscripcion</p>
        <div class="jumbotron">
                
                <form action="{{route('store')}}" method="post">
                {{csrf_field()}}
                <p class="txt2">Ingrese tu DNI</p>
                <input type="text" class="form-control" placeholder="DNI" id="campo_dni" name="dni">
                <input type="submit" value="Continuar" class="btn btn-primary" id="btn_submit">
                
                </form>
        
        </div>

    </div>


    @include("footer.footer")
</body>
</html>