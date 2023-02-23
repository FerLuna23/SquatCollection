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
    <title>Login</title>
    <meta name="robots" content="noindex,nofollow">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NMTTH4C');</script>
    <!-- End Google Tag Manager -->

	<style type="text/css" media="screen,projection">
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
</head>

<body>
    <main class="valign-wrapper">
        <div class="container">
            <div class="row center-align">
                <div class="col s12">
                    <img width="90px" height="50px" src="<?= base_url('Plantilla/img/Logo_2.png') ?>">
                </div>
                <div class="col s12">
                    <h5>Iniciar sesión</h5>
                </div>
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <form id="login-form" action="#!" method="POST" class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="user-login" name="user" type="text" class="validate" required>
                                    <label for="user-login">Usuario</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="pass-login" name="pass" type="password" class="validate" required>
                                    <label for="pass-login">Contraseña</label>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn  light-blue darken-4"><i class="material-icons right">arrow_forward</i>ingresar</button>
                            </form>
                        </div>
                        <div class="card-action">
                            <a href="#" class="red-text" id="btn-forgot">Olvidé mi contraseña</a>
                            <p class="red-text hide" id="wait-message">Espere un momento...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#login-form').on("submit", function(e){
                e.preventDefault();

                var formData = new FormData(this);
            
                $.ajax({
                    url: "<?= base_url('index.php/login/auth'); ?>",
                    type: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false

                }).done(function(response, textStatus, jqXHR) {
                    var json = $.parseJSON(response);

                    if (!json.status) {
                        alert(json.message);
                        return;
                    }

                    window.location.replace("<?= base_url('index.php/setting') ?>");

                }).fail(function(jqXHR, textStatus, thrown) {
                    //console.log(jqXHR);
                    //console.log(textStatus);
                    alert('Ocurrió un error desconocido');
                });
            });

            $('#btn-forgot').click((e) => {
                
                let userInfo = $.trim($('#user-login').val());
                
                if (userInfo === "") {
                    alert('Favor de proporcionar el usuario al que se quiere recuperar la contraseña');
                    return;
                }
                
                $('#btn-forgot').addClass('hide');
                $('#wait-message').removeClass('hide');

                $.ajax({
                    url: "<?= base_url('index.php/login/recovery'); ?>",
                    type: "POST",
                    data: { user: userInfo }

                }).done(function(response, textStatus, jqXHR) {
                    
                    $('#btn-forgot').removeClass('hide');
                    $('#wait-message').addClass('hide');

                    var json = $.parseJSON(response);
                    alert(json.message);

                }).fail(function(jqXHR, textStatus, thrown) {
                    //console.log(jqXHR);
                    //console.log(textStatus);
                    $('#btn-forgot').removeClass('hide');
                    $('#wait-message').addClass('hide');

                    alert('Ocurrió un error desconocido');
                });
            });
        });
    </script>

</body>
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
    </footer>

</body>

</html>