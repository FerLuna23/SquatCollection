<html>

<header>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>Plantilla/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>UNIFORMES</title>
</header>

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

    <body class="BodyContac">


    <div class="carousel carousel-slider">

        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_1.jpeg"></a>
        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_2.jpeg"></a>
        <a class="carousel-item" href="#one!"><img src="<?= base_url() ?>Plantilla/img/carrusel_3.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_4.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="<?= base_url() ?>Plantilla/img/carrusel_5.jpeg"></a>

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