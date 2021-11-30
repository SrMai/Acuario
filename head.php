<?php

if($_SESSION['logeado'] == 0){
    echo '
    <nav class="light">
    <div class="navigation-wrapper">
        <a class="home direction" href="index.php">
            <object data="img/logo/Favicon.svg" type="image/svg+xml">
              </object>
        </a>
        <div class="central">
            <a href="index.php" class="dark">Inicio</a>
            <a class="work-link link dark">Galeria</a>
            <a class="about-link link dark">Sobre nosotros</a>
            <a href="#contacto" class="social-link link dark">Contacto</a>
        </div>
        <div class="right">
            <a href="register.php" class="dark" target="_blank">Registro</a>
            <a href="login.php" class="dark" target="_blank">Login</a>
            <a href="out.php" class="dark" target="_blank">Salir</a>
        </div>
    </div>
</nav>
';
echo $_SESSION['logeado'];
}else if($_SESSION['logeado'] == 1){

    echo '
    <nav class="light">
    <div class="navigation-wrapper">
        <a class="home direction" href="index.php">
            <object data="img/logo/Favicon.svg" type="image/svg+xml">
              </object>
        </a>
        <div class="central">
            <a href="index.php" class="dark">Inicio</a>
            <a class="work-link link dark">Galeria</a>
            <a class="about-link link dark">Sobre nosotros</a>
            <a href="#contacto" class="social-link link dark">Contacto</a>
        </div>
        <div class="right">
            <a href="register.php" class="dark" target="_blank">Salir</a>
        </div>
    </div>
</nav>
';
}

?>
