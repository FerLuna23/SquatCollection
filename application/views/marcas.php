<html>

<head>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />

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
            <li><a href="CatgEjecutivo.html">Ejecutivos</a></li>
            <li><a href="<?= base_url('index.php/CatgIndustrial') ?>">Industriales</a></li>
            <!--li class="divider"></li-->
            <li><a href="#!">Calzado</a></li>
            <li><a href="#!">Telas</a></li>
            <li><a href="#!">Principales clientes</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper black">
                <a href="index.html" class="brand-logo">
                    <img id="logo" src="<?= base_url() ?>Plantilla/img/Logo_2.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="marcas.html">Marcas</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Uniformes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <!--<li><a href="login.html">Acceder</a></li>-->
                </ul>
            </div>
        </nav>

    </div>

    <div class="container">
        <h1 class="Mar">Marcas</h1>
    </div><br>

    <div class="imgMarcas">
        <img src="<?= base_url() ?>Plantilla/img/Propias.png" alt="">
        <img src="<?= base_url() ?>Plantilla/img/comerciales.png" alt="">
    </div><br>





    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="AvisoPriv.html">Aviso de Privacidad</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="#!">Terminos y condiciones</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

</body>


<script type="text/javascript">
    $(document).ready(function() {

        $(".dropdown-button ").dropdown({
            hover: true
        });



        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 200
        });

    });
</script>

</html>