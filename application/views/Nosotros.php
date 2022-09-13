<html>

<style>
.Texto {
  text-align: justify;
  text-justify: inter-word;
}
</style>

<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/nosotros.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>UNIFORMES</title>
</head>

<body>
    <div>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="<?= base_url('index.php/CatgEjecutivo') ?>">Ejecutivos</a></li>
            <li><a href="<?= base_url('index.php/CatgIndustrial') ?>">Industriales</a></li>
            <!--li class="divider"></li-->
            <!--<li><a href="#!">Calzado</a></li>
            <li><a href="#!">Telas</a></li>
            <li><a href="#!">Principales clientes</a></li>-->
        </ul>
        <nav>
            <div class="nav-wrapper black">
                <a href="index.html" class="brand-logo">
                    <img id="logo" src="<?= base_url() ?>Plantilla/img/Logo_2.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="<?= base_url('index.php/Welcome') ?>">Inicio</a></li>
                    <li><a href="<?= base_url('index.php/nosotros') ?>">Nosotros</a></li>
                    <!--<li><a href="<?= base_url('index.php/marcas') ?>">Marcas</a></li>-->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Uniformes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!--li><a href="<?= base_url('index.php/noticias') ?>">Noticias</a></li-->
                     <li><a href="<?= base_url('index.php/contacto') ?>">Contacto</a></li>
                    <!--<li><a href="login.html">Acceder</a></li>-->
                </ul>
            </div>
        </nav>

    </div>

    <div class="carrusel">

    <div class="carousel carousel-slider">

        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.jpeg"></a>
        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.jpeg"></a>
        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.jpeg"></a>

    </div>

    </div>
    <div class="center-align">


        <ul id="tabs-swipe-demo" class="tabs">

            <li class="tab col s3"><a class="active" href="#test-swipe-1" id="TextoMenu">Quienes Somos</a></li>
            <li class="tab col s3"><a href="#test-swipe-2" id="TextoMenu">Objetivo Comercial</a></li>
            <li class="tab col s3"><a href="#test-swipe-3" id="TextoMenu">Misión</a></li>
            <li class="tab col s3"><a href="#test-swipe-4" id="TextoMenu">Visión</a></li>

        </ul>


        <div id="test-swipe-1" class="col s12 ">
            <div class="row">

                <div class="col s6"><br><br>
                
                    <div></div></br>
                    <div class="Texto">
                        <p class="QN"> Grupo Empresarial Squat es una empresa mexicana especializada en la comercialización de uniformes y diseño de imagen corporativa. Con casi dos décadas en el mercado, desde 2006 nos hemos encargado de distribuir productos con los estándares de la más alta calidad.</p>
                    </div>
                    <div></div>

                </div>

                <div class="col s6">

                <div></div>
                    <div >
                         <img class="QNI" src="<?= base_url() ?>Plantilla/img/QuienesSomos.jpg">
                    </div>
                    <div></div>

                   
                </div>
            </div>
        </div>

        <div id="test-swipe-2" class="col s12 ">
            <div class="row">

                <div class="col s6">

                    <img class="QNI" src="<?= base_url() ?>Plantilla/img/ExtensoCatalogo.jpg">
                </div>
                <div class="col s6">

                    <div></div></br></br></br></br></br>
                    <div class="Texto">
                        <p class="OC">La satisfacción de nuestros clientes a través del diseño, confort, calidad y rendimiento de los productos.</p>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>

        <div id="test-swipe-3" class="col s12 ">
            <div class="row">

                <div class="col s6">
                <div></div></br></br></br></br>
                    <div class="Texto">  
                      <p class="Mision">Proveer de uniformes, accesorios y prendas con las mejores materias textiles a compañías, ofreciendo a nuestros clientes la mejor experiencia en comodidad, imagen y calidad.</p>
                    </div>
                </div>
                <div class="col s6">
                    <img class="QNI" src="<?= base_url() ?>Plantilla/img/Misión.jpg">
                </div>
            </div>
        </div>

        <div id="test-swipe-4" class="col s12 ">
            <div class="row">

                <div class="col s6">
                    <img class="QNI" src="<?= base_url() ?>Plantilla/img/Visión.jpg">
                </div>
                <div class="col s6">
                <div></div></br></br></br></br>
                    <div class="Texto">
                    <p class="Vision">Dominar el mercado gracias a la innovación, calidad y servicio a nivel nacional, siempre con las puertas abiertas para crear sociedades comerciales.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <footer class="page-footer black">
        <div class="container ">
            <div class="row ">
                <div class="col l6 s12 ">
                    <h5 class="white-text ">Gesquat Collection</h5>
                    <p class="grey-text text-lighten-4 ">Grupo empresarial Squat S.A DE C.V.</p>
                    <p class="grey-text text-lighten-4 ">Calle 14 #8 Int. 2 Colonia Reforma Social, Alcaldía Miguel Hidalgo, C.P. 11650, Ciudad de México.</p>
                </div>
                <div class="col l4 offset-l2 s12 ">
                    <h5 class="white-text ">Links</h5>
                    <ul>
                        <li>
                        <a class="grey-text text-lighten-3 " href="<?= base_url('index.php/AvisoPriv') ?>">Aviso de Privacidad</a>
                        </li>

                        <li>
                        <a class="grey-text text-lighten-3 " href="!#">© 2022 Copyright by Squad</a>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class=" footer-copyright ">
            <div class="container ">
                © 2022 Copyright by Squad
                <a c lass="grey-text text-lighten-4 right " href="#! ">More Links</a>
            </div>
        </div>-->
    </footer>

</body>

<script type="text/javascript">
    //$(document).ready(dropdown());

    $(".dropdown-button").dropdown({
        hover: true
    });


    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
</script>

</html>