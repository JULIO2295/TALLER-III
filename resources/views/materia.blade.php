<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');
        body{
            background-color: forestgreen;
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
            color: black;
            background-color: yellow;
            border-radius: 6px;
            border: 2px solid #0016b0;
            }

            .materia {
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
    </style></style>
</head>
<body>
    <div class="content">
        <div class="materia">
             <h1>MATERIAS</h1>
        </div>

        <div class="links">
            <a href="">LENGUAJE</a>
            <a href="">MATEMATICAS</a>
            <a href="">FIGURAS</a>
            <a href="">COLORES</a>
           
        </div>
    </div>
</body>
</html>