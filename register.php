<?php
require 'config/ACUARIO.php';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset='utf-8'>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <link rel="icon" href="img/logo/Favicon.svg" type="image/svg+xml">
    <!--<script src='https://d33wubrfki0l68.cloudfront.net/js/883326a382582014b12b9aa473c4c16018e7f736/js/horisont.js'>
    </script>-->
    <script src="js/horisont.js"></script>
    <!--<script src='https://d33wubrfki0l68.cloudfront.net/js/d5ca8ab2988f72689fc6dcff1a8081d8dd5f069f/js/main.js'></script>-->
    <script src="js/main.js"></script>
    <title>- Acuario GDL -</title>
    <link rel='stylesheet' type='text/css' href='css/main.css' />
    <style>
        /* Slider */
        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            10% {
                transform: translateX(0);
            }

            15% {
                transform: translateX(-100%);
            }

            30% {
                transform: translateX(-100%);
            }

            35% {
                transform: translateX(-200%);
            }

            50% {
                transform: translateX(-200%);
            }

            55% {
                transform: translateX(-300%);
            }

            70% {
                transform: translateX(-300%);
            }

            75% {
                transform: translateX(-400%);
            }

            90% {
                transform: translateX(-400%);
            }

            95% {
                transform: translateX(-500%);
            }

            100% {
                transform: translateX(-500%);
            }
        }

        * {
            box-sizing: border-box;
        }


        .topnav {
            background-color: rgb(41, 80, 255);
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }


        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: rgb(0, 44, 240);
            color: white;
        }

        .wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .slider {
            position: relative;
        }

        .slides {
            position: relative;
            display: flex;
            overflow: hidden;
        }

        .slide {
            width: 100vw;
            flex-shrink: 0;
            animation-name: slide;
            animation-duration: 20s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        .slides:hover .slide {
            animation-play-state: paused;
        }

        .slide img {
            width: 100%;
            vertical-align: top;
        }

        .slide a {
            width: 100%;
            display: inline-block;
            position: relative;
        }

        .caption {
            color: white;
            text-shadow: 1px 1px black;
            font-size: 8vw;
            position: absolute;
            bottom: 8vw;
            right: 4vw;
        }

        .slide:target {
            animation-name: none;
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 50;
        }

        .slider-controler {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            padding: 5px;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 100;
        }

        .slider-controler li {
            margin: 0 0.5rem;
            display: inline-block;
            vertical-align: top;
        }

        .slider-controler a {
            display: inline-block;
            vertical-align: top;
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
        }

        @media only screen and (min-width: 1200px) {
            .slide {
                width: 1200px;
            }

            .caption {
                font-size: 96px;
                bottom: 96px;
                right: 50px;
            }
        }
    </style>
</head>

<body class='light' id='myself'>
    <div class='page'>
        <div class='transition'>
            <div class='secondary'>
            </div>
        </div>
        <div class='wrapper'>
            <h1 class='page-title'>Acuario GDL &amp;middot; Conocedores De La Vida Marina</h1>
            <?php require_once "head.php"; ?>
            <footer style="padding-top: 20%; padding-bottom: 20%;">
                <div class='personal'>
                    <div class='social'>
                    </div>
                </div>
                <hr>
                <br>
                <h2 class="major">Registro</h2>
                <form action="s_c.php" method="POST">
                    <div class="fields">
                        <div class="field half">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" type="text" id="nombre" placeholder="Escribe tú nombre" required>
                        </div>
                        <div class="field half">
                            <label for="apellido">Apellido</label>
                            <input name="apellido" type="text" id="apellido" placeholder="Escribe tu apellido" required>
                        </div>
                        <div class="field half">
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo">
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                            </select>
                        </div>
                        <div class="field half">
                            <label for="correo">Correo</label>
                            <input name="correo" type="email" id="correo" placeholder="email@gmail.com" required>
                        </div>
                        <div class="field half">
                            <label for="poblacion">Población:</label>
                            <select name="poblacion" id="poblacion">
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Zapopan">Zapopan</option>
                                <option value="Tonala">Tonala</option>
                                <option value="Tlajomulco">Tlajomulco</option>
                            </select>
                        </div>
                        <p>
                            <input type="checkbox" name="info" id="info" checked="checked" />
                            <label for="info">Deseo recibir información y ofertas.</label>
                            <input type="checkbox" name="condiciones" id="condiciones" />
                            <label for="condiciones">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos.</label>
                        </p>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" class="primary" /></li>
                    </ul>
                    <br>
                    <hr>
                </form>
            </footer>
        </div>
        <div id="ubicacion" style="align-items: center; align-content: center;">
            <h5>Ubicación</h5>
            <?php echo $ubicacion ?>
        </div>
    </div>
</body>

</html>