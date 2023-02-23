<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/cookies.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.min.js"></script>

    <!--link rel="stylesheet" type="text/javascript" href="js/index.js"-->

    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34=">
    <title>Uniformes Renée by Squat</title>
    <meta name="robots" content="noindex,nofollow">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NMTTH4C');</script>
    <!-- End Google Tag Manager -->

	
</head>



<body>


<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMTTH4C" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<div>
    <div class="navbar-fixed">
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
                        <ul class="left">
                            <li>                        
                                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                            </li>
                            <li>
                                <a href="<?= base_url('index.php/Welcome') ?>" class="brand-logo">
                                    <img width="90px" height="50px" src="<?= base_url() ?>Plantilla/img/Logo_2.png">
                                </a>                            
                            </li>
                        </ul>

                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="<?= base_url('index.php/Welcome') ?>">Inicio</a></li>
                            <li><a href="<?= base_url('index.php/nosotros') ?>">Nosotros</a></li>
                            <!--<li><a href="<?= base_url('index.php/marcas') ?>">Marcas</a></li>-->
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Uniformes<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="<?= base_url('index.php/noticias') ?>">Noticias</a></li>
                            <li><a href="<?= base_url('index.php/contacto') ?>">Contacto</a></li>
                            <!--<li><a href="login.html">Acceder</a></li>-->
                        </ul>
                    </div>
                </nav>

    </div>

                <ul id="dropdown2" class="dropdown-content">
                        <li><a href="<?= base_url('index.php/CatgEjecutivo') ?>">Ejecutivos</a></li>
                        <li><a href="<?= base_url('index.php/CatgIndustrial') ?>">Industriales</a></li>
                </ul>

            
                <ul id="slide-out" class="side-nav">
                    <li><a href="<?= base_url('index.php/Welcome') ?>">Inicio</a></li>
                    <li><a href="<?= base_url('index.php/nosotros') ?>">Nosotros</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Uniformes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="<?= base_url('index.php/noticias') ?>">Noticias</a></li>
                    <li><a href="<?= base_url('index.php/contacto') ?>">Contacto</a></li>
                </ul>



</div>

<!--div>
    <?php
    print_r('listado');
    ?>
</div-->

    <div class="col s12">

        <div class="carousel carousel-slider">

            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.png"></a>

        </div>


    </div>

        <a class="waves-effect waves-light btn" href="<?= base_url('index.php/login') ?>"><i class="material-icons right">settings</i>Editar</a>

        <div>
            <p class="tituloLVDNA">LA VOZ DE NUESTRA COLECCIÓN!</p>
        </div>

        <div>
            <p class="LVNC"><u><?= $texto3[0]->nombre; ?></u><br><?= $texto3[0]->Texto; ?>. <br><br><u><?= $texto4[0]->nombre; ?>.</u><br> <?= $texto4[0]->Texto; ?>. <br><br><u><?= $texto5[0]->nombre; ?>.</u><br><?= $texto5[0]->Texto; ?>.</p>
        </div>

    </div>

    <div class="row">

        <div class="col s12 m12 l4">
            
            <div>
                <p class="tituloinicio"><?= $texto[0]->nombre; ?></p>

                <!--div><?= var_dump($texto); ?></div-->

            </div>
            
        
            <div>
                <p class="AE"><?= $texto[0]->Texto; ?></p>
            </div>  
            <div class="hide-on-large-only">
                <img class="LVDNC responsive-img" src="<?= base_url() ?>Plantilla/img/ADE.jpeg">
            </div>
        </div>


        <div class="col s12 m12 l4">
            <div> 
                <p class="tituloinicio" name="titulo"><?= $texto1[0]->nombre; ?></p>
            </div>
            <div>
                <p class="TDT"><?= $texto1[0]->Texto; ?></p>
            </div>
            <div class="hide-on-large-only">
                <img class="LVDNC responsive-img" src="<?= base_url() ?>Plantilla/img/TDT.jpeg">
            </div>
            
        </div>


        <div class="col s12 m12 l4">
            <div>
                <p class="tituloinicio"><?= $texto2[0]->nombre; ?></p>
            </div>
            <div>
                <p class="PVT"><?= $texto2[0]->Texto; ?></p>
            </div>
            <div class="hide-on-large-only">
                <img class="LVDNC responsive-img" src="<?= base_url() ?>Plantilla/img/PV.jpeg">
            </div>
        </div>
        
    </div>


    <div class="row hide-on-med-and-down">

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

    <div class="aviso-cookies" id="avisoCokkies">
        <!--img class="galleta" src="<?= base_url() ?>Plantilla/img/cookies.jpg" alt="Galleta"-->
        <h3 class="tituloCookies">Cookies</h3>
        <p class="parrafoCookies">Utilizamos Cookies propias y de terceros para mejorar nuestros servicios.</p>
        <button class="Boton" id="btn-aceptar-cookies">De Acuerdo</button>
        <a class="enlace" href="" >Aviso de Cookies</a>
    </div>

    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>


    <footer class="page-footer black">
        <div class="container ">
            <div class="row ">
                <div class="col l6 s12 ">
                    <h5 class="white-text ">Renée Collection</h5>
                    <p class="grey-text text-lighten-4 ">Grupo Empresarial Squat S.A DE C.V.</p>
                    <p class="grey-text text-lighten-4 ">Calle 14 #8 Int. 2 Colonia Reforma Social, Alcaldía Miguel Hidalgo, C.P. 11650, Ciudad de México.</p>
                </div>
                <div class="col l4 offset-l2 s12 ">
                    <h5 class="white-text ">Síguenos 

                    <a href="https://www.facebook.com/profile.php?id=100086072952703"  target="_blank">
                    <i class="white-text  fab fa-facebook"></i>&nbsp;
                    </a>

                    <a href="https://instagram.com/uniformes_renee_mr?r=nametag"  target="_blank">
                    <i class="white-text  fab fa-instagram"></i>
                    </a>

                    </h5>

                    <ul>

                        <li>
                        <a class="grey-text text-lighten-3 " href="<?= base_url('index.php/AvisoPriv') ?>">Aviso de Privacidad</a>
                        </li>

                        <li>
                        <a class="grey-text text-lighten-3 " href="!#">© 2022 Copyright by Squat</a>
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

<script type="text/javascript" src="<?= base_url() ?>Plantilla/js/avisoCookies.js"></script>

<script type="text/javascript ">

    $(document).ready(function() {

        setInterval(function(){

            $('.carousel').carousel('next');
            
        }, 5000);

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

    $(".button-collapse").sideNav({

        menuWidth: 180, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
        onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
        });

        document.addEventListener('DOMContentLoaded', function(){
        //*M.AutoInit();
    });

    const llenar_datos = (id, titulo, texto)=>{
        console.log(id, titulo, texto);
    }    
    
</script>

</html>
