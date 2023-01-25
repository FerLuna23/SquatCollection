
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="../Plantilla/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="../Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/cookies.css" />


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="../Plantilla/js/materialize.min.js"></script>
    <!--link rel="stylesheet" type="text/javascript" href="js/index.js"-->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    </head>

	<meta charset="utf-8">
	<title>Renée Collection</title>

	
</head>
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

    <div class="carousel carousel-slider">

            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.png"></a>

    </div>

    <div class="Container" style="text-align:center;"> 

    <h1>
        <i>Uniformes Industriales</i>
    </h1>
    <div class="row">

        <div class="col s12 " style="background-color:#FFFEFF">
  
            <h2>Dama </h2>

    
            <div class="row">
                
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Industrial/UI_M_1v.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                        
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                            <p>BLUSA: Casual<br>
                            TIPO: Camisera<br>
                            COLOR: Fantasy Cuadro Vichy<br>
                            COMPOSICIÓN: <br>
                            50% Poliéster <br>
                            50% Algodón</p>

                            <p>Pantalón Mezclilla<br>
                            COLOR: Indigo<br>
                            Consultar opciones de colores<br>
                            COMPOSICIÓN: <br>
                            100% Algodón</p>
                        </div>
                    </div>
                </div>
                        
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Industrial/UI_M_2v.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                        
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                            <p>BLUSA: Casual<br>
                            TIPO: Camisera<br>
                            COLOR: Fantasy Cuadro Vichy<br>
                            COMPOSICIÓN: <br>
                            50% Poliéster <br>
                            50% Algodón</p>

                            <p>Pantalón gabardina<br>
                            COLOR: Kaki<br>
                            Consultar opciones de colores<br>
                            COMPOSICIÓN: <br>
                            60% Poliéster <br>
                            40% Algodón</p>
                        </div>
                    </div>
                </div>
                    
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Industrial/UI_M_3v.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                        
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                            <p>BLUSA: Seguridad<br>
                            TIPO: Camisera<br>
                            COLOR: Marino<br>
                            Consultar opciones de colores<br>
                            COMPOSICIÓN: <br>
                            Consultar opciones</p>

                            <p>Pantalón Mezclilla<br>
                            COLOR: Indigo<br>
                            Consultar opciones de colores<br>
                            COMPOSICIÓN: <br>
                            100% Algodón</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Industrial/UI_M_4v.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                        
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                            <p>Filipina para Dama<br>
                            COLOR: Blanco<br>
                            Consultar opciones de colores<br>
                            COMPOSICIÓN: <br>
                            Consultar opciones</p>

                            <p>Pantalón con resorte o jareta<br>
                            COLOR: Blanco<br>
                            Consultar opciones de colores<br>
                            COMPOSICIÓN: <br>
                            Consultar opciones</p>
                        </div>
                    </div>
                </div>
                       
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                        <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Industrial/UI_M_5v.jpg">
                        </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                    
                        </div>
                        <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                        <p>Bata para Dama<br>
                        COLOR: Blanco<br>
                        Consultar opciones de colores<br>
                        COMPOSICIÓN: <br>
                        Consultar opciones</p>
                        
                        <p>Filipina para Dama<br>
                        COLOR: Blanco<br>
                        Consultar opciones de colores<br>
                        COMPOSICIÓN: <br>
                        Consultar opciones</p>

                        <p>Pantalón con resorte o jareta<br>
                        COLOR: Blanco<br>
                        Consultar opciones de colores<br>
                        COMPOSICIÓN: <br>
                        Consultar opciones</p>
                        </div>
                    </div>
                </div>
                    
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                        <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Mujer Industrial/UI_M_6v.jpg">
                        </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                    
                        </div>
                        <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                        <p>Filipina para Chef<br>
                        COLOR: Negro<br>
                        Consultar opciones de colores<br>
                        COMPOSICIÓN: <br>
                        Consultar opciones</p>
                        
                        <p>Mandil Estampado<br>
                        COLOR: Negro<br>
                        Consultar opciones de colores<br>
                        (Consultar diseños)<br>
                        COMPOSICIÓN: <br>
                        100% Poliéster</p>

                        <p>Pantalón de gabardina con resorte o jareta<br>
                        COLOR: Negro<br>
                        Consultar opciones de colores<br>
                        COMPOSICIÓN: <br>
                        Consultar opciones</p>
                        </div>
                    </div>
                </div>

            </div>
</div>

    <div class="col s12" style="background-color:#E4E4E4"> 
        <h2>Caballero</h2>

        <div class="row">

            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image ">
                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_2v.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                    <p>Camisa Casual<br>
                    TIPO: Camisera<br>
                    COLOR: Fantasy Cuadro Vichy<br>
                    COMPOSICIÓN: <br>
                    50% Poliéster <br>
                    50% Algodón</p>

                    <p>Pantalón Mezclilla<br>
                    COLOR: Indigo<br>
                    Consultar opciones de colores<br>
                    COMPOSICIÓN: <br>
                    100% Algodón</p>
                    </div>
                </div>
            </div>
                    
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image ">
                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_4v.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                    <p>Camisola de Seguridad<br>
                    TIPO: Camisera<br>
                    COLOR: Marino<br>
                    Consultar opciones de colores<br>
                    COMPOSICIÓN: <br>
                    Consultar opciones</p>

                    <p>Opción de Bordados Aplicaciones</p>
                    </div>
                </div>
            </div>
                
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image ">
                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_7v.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                    <p>Camisola para Chef con bolsas de parche<br>
                    TIPO: Camisera<br>
                    COLOR: Blanco<br>
                    Consultar opciones de colores<br>
                    COMPOSICIÓN: <br>
                    Consultar opciones</p>

                    <p>Mandil Estampado<br>
                    COLOR: Negro<br>
                    Consultar opciones de colores y diseños<br>
                    COMPOSICIÓN: <br>
                    100% Poliéster</p>

                    <p>Pantalón de gabardina con resorte o jareta<br>
                    COLOR: Negro<br>
                    Consultar opciones de colores<br>
                    COMPOSICIÓN: <br>
                    Consultar opciones</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_8v.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                
                    </div>
                    <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                    <p>Filipina para Caballero<br>
                    COLOR: Blanco<br>
                    Consultar opciones de colores<br>
                    COMPOSICIÓN: <br>
                    Consultar opciones</p>

                    <p>Pantalón con resorte o jareta<br>
                    COLOR: Blanco<br>
                    Consultar opciones de colores<br>
                    COMPOSICIÓN: <br>
                    Consultar opciones</p>
                    </div>
                </div>
            </div>
                            
        </div>

    </div>

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



    <script type="text/javascript" src="../Plantilla/js/materialize.min.js"></script>
</body>

<script type="text/javascript" src="<?= base_url() ?>Plantilla/js/avisoCookies.js"></script>


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

    <script type="text/javascript ">
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

</html>
