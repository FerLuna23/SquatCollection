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
            <li><a href="CatgEjecutivo.html">Ejecutivos</a></li>
            <li><a href="#!">Industriales</a></li>
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

    <div class="PC">
        <div>
            <p class="textoPC"> <strong> CONFIGURACIÓN</strong></p>
        </div>
    </div>

    <div class="section container">
        <div class="row">

            <div class="col s6">
                <div>
                    <p class="tituloText"> <strong> Título</strong></p>
                </div>
                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>
                </div>

            </div>

            <div class="col s6">

                <div>
                    <p class="contenidoText"> <strong> Contenido</strong></p>
                </div>
                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>        
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>
                </div>

            </div>

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>        
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>
                </div>

            </div>

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>        
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>
                </div>

            </div>

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>        
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>
                </div>

            </div>

            <div class="col s6">

                <div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"></label>
                    </div>        
                </div>
            </div>

        </div>


    </div>




    <footer class="page-footer black ">
        <div class="container ">
            <div class="row ">
                <div class="col l6 s12 ">
                    <h5 class="white-text ">
                        <strong>Renée Collection</strong> by Squat</h5>
                    © 2022 Copyright by Squat
                </div>
                <div class="col l4 offset-l2 s12 ">
                    <h5 class="white-text ">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3 " href="AvisoPriv.html ">Aviso de Privacidad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--div class="footer-copyright ">
            <div class="container ">
                © 2022 Copyright by Squat
            </div>
        </div-->
    </footer>


</body>

<script type="text/javascript ">
    $(document).ready(function() {

        $(".dropdown-button ").dropdown({
            hover: true
        });


    });
</script>

</html>
