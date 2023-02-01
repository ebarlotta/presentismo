<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efecto Hover Parallax - MagtimusPro</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{ asset('css/estilos2.css') }}">

    <style>
        header{
            display:flex;
            height: 80px;
            background-color: blueviolet;
            justify-content: space-evenly;
        }

        .logo {
            display: flex;
        }

        .logo img{
            height: 60px;
            margin-top: 7px;
        }
    </style>

    {{-- <div class="logo" style="height: 25%;">
        <img src="{{ asset('images/logoPresentismoMedio.png') }}" alt="Logo Terra Organic" class="logo-img">

    </div>
    <button type="button" class="btn btn-warning">Warning</button>
    <input class="btn btn-primary" type="reset" value="Reset"> --}}



</head>
<body>
    @include('navbar')


    <div class="container__cards">

        <div class="card">
            <div class="cover">
                <img src="{{ asset('images/p1.png') }}" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Primer Nombre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, laboriosam.</p>
                <input type="button" value="Leer Más">
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="{{ asset('images/p2.png') }}" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Segundo Nombre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, laboriosam.</p>
                <input type="button" value="Leer Más">
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="{{ asset('images/p3.png') }}" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Terser Nombre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, laboriosam.</p>
                <input type="button" value="Leer Más">
            </div>
        </div>

    </div>

</body>
</html>
