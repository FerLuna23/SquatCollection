<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.min.js"></script>
    <!--link rel="stylesheet" type="text/javascript" href="js/index.js"-->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<meta charset="utf-8">
	<title>Renée Collection</title>

	
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

    <div class="col s12">

        <div class="carousel carousel-slider">

            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.jpeg"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.jpeg"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.jpeg"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.jpeg"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.jpeg"></a>

        </div>


    </div>

    <div>
        
        <div>
            <p class="tituloLVDNA">LA VOZ DE NUESTRA COLECCIÓN</p>
        </div>

        <div>
            <p class="LVNC"><u>Fresca y liviana.</u><br>Diversos muestrarios de telas (climas cálidos o templados) que se pueden unificar. <br><br><u>Moderna y práctica.</u><br>Diseños básicos y especiales a su elección (contrastes de telas, tipo de botón,
                            pespuntes, otros.) <br><br><u>Elegante y única.</u><br>Bordados sublimados y personalizados.</p>
        </div>

    </div>

    <div class="row">

        <div class="col s4">
            <div>
                <p class="tituloinicio">ASESORIA DE EXPERTOS</p>
            </div>
            <div>
                <p class="AE">Las soluciones integrales de GESQUAT permiten a nuestros Clientes seleccionar entre diferentes diseños 
                        y modelos, nuestros profesionales en ventas y diseño siempre están dispuestos para asesorar.</p>
            </div>  
               

            
        </div>


        <div class="col s4">
            <div> 
                <p class="tituloinicio">TOMA DE TALLAS</p>
            </div>
            <div>
                <p>Nos interesa la comodidad de nuestros Clientes, por eso la toma de tallas se realiza en sus instalaciones.
                   Nuestro formato para toma de medidas cuenta con las especificaciones necesarias para que las prendas se elaboren a la 
                   medida del Cliente.</p>
            </div>
            
        </div>


        <div class="col s4">
            <div>
                <p class="tituloinicio">POST VENTA</p>
            </div>
            <div>
                <p>En GESQUAT siempre buscamos que la venta y la postventa cumplan con la satisfacción de nuestros 
                    Clientes,  logrando generar fidelidad a largo plazo.</p>
            </div>
            
        </div>
    </div>


    <div class="row">

        <div class="col s4">
            <div>
                <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/ADE.jpeg">
            </div>
        </div>

        <div class="col s4">
            <div>
                <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/TDT.jpeg">
            </div>
        </div>

        <div class="col s4">
            <div>
                <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/PV.jpeg">
            </div>
        </div>

    </div>


    <div class="PC">
        <div>
            <p class="textoPC"> <strong> TU MEJOR INVERSIÓN COMIENZA AQUÍ</strong></p>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/TMICA_2.jpeg">
        </div>

        <div class="col s6">
            <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/TMICA_3.jpeg">
        </div>

    </div>

    <div class="row">
        <div class="col s6">
            <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/TMICA_4.jpeg">
        </div>

        <div class="col s6">
            <img class="LVDNC" src="<?= base_url() ?>Plantilla/img/TMICA_5.jpeg">
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

<script type="text/javascript ">
    $(document).ready(function() {

        $(".dropdown-button ").dropdown({
            hover: true
        });

        $('.parallax').parallax();


        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 200
        });

    });
</script>

</html>
