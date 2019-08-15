<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');
        body{
            background-image: url(20252.jpg);
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 74px;
            }

            .links > a {
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: #ffffff;
            background-color: #1883ba;
            border-radius: 6px;
            border: 2px solid #0016b0;
            }

            .m-b-md {
                margin-bottom: 100px;
               }
            h1{
                display: inline-block;
                position: relative;
                font-size: 100px;
                font-family: 'Dancing Script',cursive;
            }
            h1::after,h1::before{
                content: '';
                position: absolute;
                width: 120px;
                height: 3px;
                background-color: black;
                top: 0.6em;
                
            }
            h1::before{
                left: -150px;
            }
            h1:after{
                right: -150px;
            }
    </style>
</head>
 <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">INGRESAR</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">REGISTRO
                    </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                     <h1>APRENDIENDO</h1>
                </div>

                <div class="links">
                    <a href="señas">LENGUAJE DE SEÑAS</a>
                    <a href="materia">MATERIAS COMPLETAS</a>
                   
                </div>
            </div>
        </div>
    </body>
</html>