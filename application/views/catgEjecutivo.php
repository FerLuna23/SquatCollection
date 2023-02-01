
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
    <!--Menú-->
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

    <!--Carrusel-->
    <div class="carousel carousel-slider">

            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.png"></a>
            <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.png"></a>
            <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.png"></a>

    </div>


    <!--Catalogo-->
    <div class="Container" style="text-align:center;"> 

        <h1>
        <i>Uniformes Ejecutivos</i>
        </h1>
        <div class="row">

            <div style="background-color:#FFFEFF">
            
                <h2>Dama </h2>


                    <div class="row">

                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"  src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_11v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>
                                    <p class="flow-text">SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    Pantalón o Falda<br>
                                    COLOR: Rojo Carmin<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    97% Poliéster <br>
                                    3% Spandex</p>

                                    <p>BLUSA: Estampada<br>
                                    COLOR: Marino<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>   
                            </div>
                        </div>
                         
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"  src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_12v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p class="flow-text">SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    COLOR: Palo de Rosa<br>
                                    Pantalón o Falda<br>
                                    COLOR: Gris Jaspe<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    97% Poliéster <br>
                                    3% Spandex</p>

                                    <p>BLUSA: Estampada<br>
                                    COLOR: Blanco/Palo de Rosa<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_13v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    COLOR: Mango<br>
                                    Pantalón o Falda<br>
                                    COLOR: Negro<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    97% Poliéster <br>
                                    3% Spandex</p>

                                    <p>BLUSA: Estampada<br>
                                    COLOR: Blanco/Negro<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                            </div>
                        </div>

                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_14v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    Pantalón o Falda<br>
                                    COLOR: Merlot<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    97% Poliéster <br>
                                    3% Spandex</p>

                                    <p>BLUSA: Estampada<br>
                                    COLOR: Blanco/Vino<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                            </div>
                        </div>
                              
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_15v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    COLOR: Principe de Gales(Rosa/Gis)<br>
                                    Pantalón o Falda<br>
                                    COLOR: Gris Oxford<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    97% Poliéster <br>
                                    3% Spandex</p>

                                    <p>BLUSA: Estampada<br>
                                    COLOR: Palo de Rosa<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_16v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>

                                    <p>SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    Pantalón o Falda<br>
                                    COLOR: Negro<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    97% Poliéster <br>
                                    3% Spandex</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Blanco<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                            </div>
                        </div>

                    </div>  


            </div>

            <div class="" style="background-color:#FFFEFF">

             
                    <div class="row">

                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_1v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER: Casual<br>
                                    Opción chaleco<br>
                                    COLOR: Mascota/negro/Blanco<br>
                                    Pantalón o Falda<br>
                                    COLOR: Negro<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Viscosa</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Blanco<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                            </div>
                        </div>
                                
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_2v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER: Casual<br>
                                    Opción chaleco<br>
                                    COLOR: Fantasía a cuadros Azul rey<br>
                                    Pantalón o Falda<br>
                                    COLOR: Azul rey<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Viscosa</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Azul cielo<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_3v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>SACO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    Pantalón o Falda<br>
                                    COLOR: Gris claro<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Rayas Gris/Blanco<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                            </div>
                        </div>

                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_4v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>SACO CRUZADO: Ejecutivo<br>
                                    Opción chaleco<br>
                                    Pantalón o Falda<br>
                                    COLOR: Pizarra<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Fantasia Gris/Blanco<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                            </div>
                        </div>
                               
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_5v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER: Casual<br>
                                    Opción chaleco<br>
                                    COLOR: Fantasía/Uva Jaspeado<br>
                                    Pantalón o Falda<br>
                                    COLOR: Marino<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Viscosa</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Blanco<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                            </div>  
                        </div>
                        
                        <div class="col s12 m12 l2">
                            <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Ejecutivos_Dama/UE_M_6v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER: Casual<br>
                                    Opción chaleco<br>
                                    COLOR: Fantasía/Uva Jaspeado<br>
                                    Pantalón o Falda<br>
                                    COLOR: Marino<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Viscosa</p>

                                    <p>BLUSA: Camisera<br>
                                    COLOR: Blanco<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                            </div>
                        </div>

                    </div>

                
            </div>

            <div class="" style="background-color:#FFFEFF">
            
                <h2>Chamarras Dama </h2>

                <div class="row">

                    <div class="col s12 m12 l2">
                        <div class="card">
                            <div class="card-image">
                                <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Chamarras_Dama/C-A_M_1v.jpg">
                                </div>
                                <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                            
                                </div>
                                <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                <p>CHAMARRA: Casual<br>
                                COLOR: Marino<br>
                                Consultar opciones de colores<br>
                                COMPOSICIÓN: <br>
                                100% Poliéster <br>
                                FORRO: <br>
                                Estampado</p>

                            </div>
                        </div>
                    </div>
                         
                    <div class="col s12 m12 l2">
                        <div class="card">
                            <div class="card-image">
                                <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Chamarras_Dama/C-A_M_2v.jpg">
                                </div>
                                <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                            
                                </div>
                                <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                <p>CHAMARRA: Casual<br>
                                COLOR: Marino<br>
                                Consultar opciones de colores<br>
                                COMPOSICIÓN: <br>
                                100% Poliéster <br>
                                FORRO: <br>
                                Estampado</p>

                            </div>
                        </div>
                    </div>
                        
                    <div class="col s12 m12 l2">
                        <div class="card">
                            <div class="card-image">
                                <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Chamarras_Dama/C-A_M_3v.jpg">
                                </div>
                                <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                            
                                </div>
                                <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                <p>CHAMARRA: Casual<br>
                                COLOR: Naranja<br>
                                Consultar opciones de colores<br>
                                COMPOSICIÓN: <br>
                                100% Poliéster <br>
                                FORRO: <br>
                                Estampado</p>

                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                            <div class="card-image">
                                <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Mujer Ejecutiva/Chamarras_Dama/C-A_M_5v.jpg">
                                </div>
                                <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                            
                                </div>
                                <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                <p>CHAMARRA: Casual<br>
                                COLOR: Negro<br>
                                Consultar opciones de colores<br>
                                COMPOSICIÓN: <br>
                                100% Poliéster <br>
                                FORRO: <br>
                                Estampado</p>

                            </div>
                        </div>
                    </div>
                                    
                </div>

            </div>

            <!-- CABALLERO-->
            <div class="col s12" style="background-color:#E4E4E4"> 
                <h2>Caballero</h2>

                <div class="row">
                        
                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/C-A_H_3v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>ABRIGO: Ejecutivo<br>
                                    COLOR: Marino<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Gris Medio<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Azul cielo <br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                    <p>CORBATA<br>
                                    COLOR: Fantasía Azul Rayas <br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                        </div>
                    </div>
                            
                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"   src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_1v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER: Casual<br>
                                    COLOR: Fatasía a cuadros azul rey<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Negro<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Blanco con contraste<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                        </div>
                    </div>
                
                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_3v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER: Casual<br>
                                    COLOR: Fantasía uva jaspeado<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Viscosa</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Navy<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Viscosa</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Blanco con contraste<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"     src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_5v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>

                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>TRAJE EJECUTIVO SACO<br>
                                    COLOR: Gris Oxford<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Gris Oxferd<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Blanca<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                    <p>CORBATA<br>
                                    COLOR: Fantasía Rayas /Carmín/Marino<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_7v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>

                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>TRAJE EJECUTIVO BLAZER<br>
                                    COLOR: Fantasía cuadros/Gris jaspe<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Fantasía cuadros/Gris jaspe<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Azul cielo con contraste<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img"    src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_8v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>

                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>TRAJE EJECUTIVO BLAZER<br>
                                    COLOR: Fantasía cuadros/Gris jaspe<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Fantasía cuadros/Gris jaspe<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Azul cielo con contraste<br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                        </div>
                    </div>
                                        
                </div>

                <div class="row">
    
                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/C-A_H_1v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>CHALECO: Casual<br>
                                    COLOR: Marino<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

                                    <p>PANTALÓN<br>
                                    COLOR: Navy<br>
                                    Consultar opciones de colores <br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                    <p>CAMISA DE VESTIR<br>
                                    COLOR: Blanco <br>
                                    COMPOSICIÓN: <br>
                                    50% Poliéster <br>
                                    50% Algodón</p>

                                </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_9v.jpeg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER EJECUTIVO<br>
                                    COLOR: Gris cuadros<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                </div>
                        </div>
                    </div>    

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_10v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER EJECUTIVO<br>
                                    COLOR: Principe de Gales Gris<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_11v.jpeg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>BLAZER EJECUTIVO<br>
                                    COLOR: Beige cuadros<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    65% Poliéster <br>
                                    35% Algodón</p>

                                </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l2">
                        <div class="card">
                                <div class="card-image">
                                    <img class="activator responsive-img" src="<?= base_url() ?>Plantilla/img/Hombre Ejecutivos/UE_H_12v.jpg">
                                    </div>
                                    <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Información<i class="material-icons right">expand_more</i></span>
                                
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span><br>

                                    <p>CHALECO: Casual<br>
                                    COLOR: Gris<br>
                                    Consultar opciones de colores<br>
                                    COMPOSICIÓN: <br>
                                    100% Poliéster</p>

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

            $(".dropdown-button ").dropdown({
                hover: true
            });


            setInterval(function(){
                $('.carousel').carousel('next');

            }, 5000);


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
