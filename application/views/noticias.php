
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="../Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="../Plantilla/css/index.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../Plantilla/js/materialize.js"></script>
    <script type="text/javascript" src="../Plantilla/js/materialize.min.js"></script>
    <!--link rel="stylesheet" type="text/javascript" href="js/index.js"-->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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


    <div>

        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">
              <p>11/Junio/2022</p>&nbsp;
              <p>Sesión de fotos, Catalogo de uniformes<i class="material-icons">arrow_drop_down</i></p>
              </div>
                <div class="collapsible-body">
                      <div style=" display: flex;  justify-content: space-between; ">
                            <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_2v.jpg">
                            <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_2v.jpg">
                            <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_2v.jpg">
                            <img class="activator" style="height:300px;" src="<?= base_url() ?>Plantilla/img/Hombre Industrial/UI_H_2v.jpg">

                      </div>
                </div>
          </li>
          
        </ul>

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

    <script type="text/javascript" src="../Plantilla/js/materialize.min.js"></script>
</body>

<script type="text/javascript ">
  
  $(document).ready(function(){
    
    $('.carousel.carousel-slider').carousel({fullWidth: true});

    console.log("ready");
});
  //document.addEventListener('DOMContentLoaded', function() {
    //var elems = document.querySelectorAll('.carousel');
    //var instances = M.Carousel.init(elems, {});
  //});

  //var instance = M.Carousel.init({
   // fullWidth: true
  //});

  //$('.carousel').carousel();
  //setInterval(function() {
  //  $('.carousel').carousel('next');
  //}, 5000); // cada 5seg 
</script>

</html>
