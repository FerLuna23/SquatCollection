<html>

<header>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/cookies.css" />


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>UNIFORMES</title>
</header>

<body>
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

    <body class="BodyContac">


    <div class="carousel carousel-slider">

            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.png"></a>

    </div>
        <div class="Mar">
            <h1>
                Contáctanos
            </h1>
        </div>

        <div class="section container">
            <div class="row">
                <form class="col s12">
                    <div class="row card panel">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nombre" type="text" class="validate" required>
                            <label for="Nombre">Nombre(s)</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <input id="apellido" type="text" class="validate" required>
                            <label for="Apellido">Empresa</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="tel" type="number" class="validate" required>
                            <label for="Telefono">Teléfono</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail</i>
                            <input id="mail" type="tel" class="validate" required>
                            <label for="Mail">Correo Eléctronico</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Escribe un comentario</label>
                        </div>


                        <button class="btn" id="BtnSend" type="submit">Enviar</button><br><br>


                    </div>
                </form>
            </div>
        </div>


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

    <div class="aviso-cookies" id="avisoCokkies">
        <!--img class="galleta" src="<?= base_url() ?>Plantilla/img/cookies.jpg" alt="Galleta"-->
        <h3 class="tituloCookies">Cookies</h3>
        <p class="parrafoCookies">Utilizamos Cookies propias y de terceros para mejorar nuestros servicios.</p>
        <button class="Boton" id="btn-aceptar-cookies">De Acuerdo</button>
        <a class="enlace" href="" >Aviso de Cookies</a>
    </div>

    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

</body>

<script type="text/javascript" src="<?= base_url() ?>Plantilla/js/avisoCookies.js"></script>


<script type="text/javascript">
    $(document).ready(function() {


        setInterval(function(){
            $('.carousel').carousel('next');

        }, 5000);
        

        $(".dropdown-button ").dropdown({
            hover: true
        });


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
</script>

</html>