
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="../Plantilla/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="../Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/cookies.css" />


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    </head>

	<meta charset="utf-8">
	<title>Renée Collection</title>

	<style>
    .carousel { 
        min-height: 800px;
        }

</style>
</head>
<body>


        <div class="navbar-fixed">
               <!-- Dropdown Structure -->
               <ul id="dropdown1" class="dropdown-content">
                    <li><a href="<?= base_url('index.php/CatgEjecutivo') ?>">Ejecutivos</a></li>
                    <li><a href="<?= base_url('index.php/CatgIndustrial') ?>">Industriales</a></li>
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


    <div class="Container">
        <div class="row">

            <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header">
                
                <p class="tituloNoticias">11/Junio/2022&nbsp; <strong>Sesión de fotos para nuestro catálogo de uniformes y básicos, la sesión fue realizada por el fotógrafo Hugo Moreno y nuestro equipo de modelos. </strong><i class="material-icons">arrow_drop_down</i></p>
                </div>
                    <div class="collapsible-body">
                        <div style=" display: flex;  justify-content: space-between; ">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_1/sesion_1.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_1/sesion_2.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_1/sesion_3.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_1/sesion_4.jpg">

                        </div>
                    </div>
            </li>

            <li>
                <div class="collapsible-header">
                
                <p class="tituloNoticias">30/Septiembre/2022&nbsp; <strong> Nuestro equipo preparando la entrega de un pedido más a nivel nacional, los paquetes van personalizados y cada uno lleva 4 camisas y 4 pantalones. </strong><i class="material-icons">arrow_drop_down</i></p>
                </div>
                    <div class="collapsible-body">
                        <div style=" display: flex;  justify-content: space-between; ">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.1.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.2.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.3.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.4.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.5.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.6.jpg">


                        </div>
                    </div>
            </li>

            <li>
                <div class="collapsible-header">
                
                <p class="tituloNoticias">18/Noviembre/2022&nbsp; <strong> Entrega de playeras alusiva a Qatar para dama y caballero.</strong><i class="material-icons">arrow_drop_down</i></p>
                </div>
                    <div class="collapsible-body">
                        <div style=" display: flex;  justify-content: space-between; ">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.1.jpg">
                                <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Noticias/Noticia_2/Sesion_2.2.jpg">

                        </div>
                    </div>
            </li>
            
            </ul>
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
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
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


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="../Plantilla/js/materialize.min.js"></script>
    <!--link rel="stylesheet" type="text/javascript" href="js/index.js"-->


    <script type="text/javascript ">
    
        $(document).ready(function(){
            
            $('.carousel.carousel-slider').carousel({fullWidth: true});
            //$('.button-collapse').sideNav('show');

            
            console.log("ready");
            });

            $(".button-collapse").sideNav({

                menuWidth: 175, // Default is 300
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true, // Choose whether you can drag to open on touch screens,
                onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
                onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
            });

            document.addEventListener('DOMContentLoaded', function(){
                //*M.AutoInit();
            });

    </script>

    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/avisoCookies.js"></script>

</body>

</html>
