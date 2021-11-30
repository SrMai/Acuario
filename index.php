<?php
require 'config/ACUARIO.php';
include('session.php');
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
            <div class='hero'>
                <div class='text'>
                    <h1 class='dark'>Bienvenido,</h1>
                    <p class='dark'>Hola! <br> Bienvenido a la página oficial de - Acuario GDL -.</p>
                </div>
                
            </div>
            <div class='projects work'>
                <div class='box light'></div>
                <div>
                    <a class='card manjaras direction' style='order: 1' href='categorias/peces.php'>
                        <div class='container' style="padding-bottom: 20px;">
                            <div class='imagery'>
                                <img src='img/01.jpg' />
                            </div>
                            <div class='bottom-description lighter'></div>
                            <div class='description lighter'>
                                <div class='wrapper'>
                                    <h4 class='dark'>Peces</h4>
                                    <p class='dark'>Tenemos mas especies de peces dde las que puedes contar, ¿Por qué no vienes e intentas descubrir cuales son?</p>
                                </div>
                                <div class='indicator'>
                                    <img class='arrow' src='https://d33wubrfki0l68.cloudfront.net/f263eb9b0de12406236b21f17e05a2735b662034/7258f/images/projects/arrow.svg' />
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='card linjer direction' style='order: 3' href='categorias/delfines.php'>
                        <div class='container'>
                            <div class='imagery'>
                                <img src='img/02.jpg' />
                            </div>
                            <div class='bottom-description lighter'></div>
                            <div class='description lighter'>
                                <div class='wrapper'>
                                    <h4 class='dark'>Delfines</h4>
                                    <p class='dark'>¿Te animas a nadar con delfines?</p>
                                </div>
                                <div class='indicator'>
                                    <img class='arrow' src='https://d33wubrfki0l68.cloudfront.net/f263eb9b0de12406236b21f17e05a2735b662034/7258f/images/projects/arrow.svg' />
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='card aparcat direction' style='order: 2' href='categorias/tortugas.php'>
                        <div class='container'>
                            <div class='imagery'>
                                <img src='img/03.jpg' />
                            </div>
                            <div class='bottom-description lighter'></div>
                            <div class='description lighter'>
                                <div class='wrapper'>
                                    <h4 class='dark'>Tortugas</h4>
                                    <p class='dark'>Sabias que en la actualidad existen 245 especies de tortugas, distribuidas en 87 géneros y 12 familias?.</p>
                                </div>
                                <div class='indicator'>
                                    <img class='arrow' src='https://d33wubrfki0l68.cloudfront.net/f263eb9b0de12406236b21f17e05a2735b662034/7258f/images/projects/arrow.svg' />
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class='card redbull' style='order: 4' href='categorias/pinguinos.php'>
                        <div class='container'>
                            <div class='imagery'>
                                <img src='img/04.jpg' />
                            </div>
                            <div class='bottom-description lighter'></div>
                            <div class='description lighter'>
                                <div class='wrapper'>
                                    <h4 class='dark'>Pingüinos</h4>
                                    <p class='dark'>Los pingüinos de nuestro acuario son muy sociables, ven a interactuar con ellos!.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class='personal'>
                <div class='social'>
                </div>
                <div class='hobbies'>
                    <div>
                        <p class='mono '>Sobre nosotros</p>
                        <p>En Acuario GDL nos regimos por la conservación, la educación, la investigación y la recreación para ofrecer a cada 
                           visitante una experiencia única en la que no sólo conozcan sobre las especies y sus ecosistemas, sino que reconozcan la riqueza 
                           biológica de México y la importancia de protegerlo, mediante información y actividades recreativas..</p>
                        <br>
                        <p>Acuario GDL envuelve al público dentro de su temática, generando emoción, sorpresa y expectativa en un 
                           recorrido intuitivo. Dentro de éste, cada visitante se convierte en un explorador en busca de nuevas emociones y conocimientos.</p>
                        <br>
                        <p>
                            El centro del acuario se vuelve un espacio de descubrimiento, conectando así diversos ecosistemas, culturas prehispánicas y 
                            temas concientizadores. Cada unos de los visitantes podrá recorrer indistintamente y libremente las distintos salas, generando 
                            con esto una conexión positiva con el medio ambiente y el propio conocimiento adquirido al haberse esforzado por obtenerlo.
                        </p>
                    </div>
                </div>
            </div>
            
            <hr>
            <br>
            <!-- Contacto -->
            <?php require_once "Vistas/FormContacto.php"; ?>
        </div>
        <div id="ubicacion" style="align-items: center; align-content: center;">
            <h5>Ubicación</h5>
                <?php echo $ubicacion ?>
        </div>
    </div>
</body>

</html>
