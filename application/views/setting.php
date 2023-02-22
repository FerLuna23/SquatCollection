<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/Materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Plantilla/css/setting.css" />


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
            <!--li><a href="#!">Calzado</a></li>
            <li><a href="#!">Telas</a></li>
            <li><a href="#!">Principales clientes</a></li-->
        </ul>
        <nav>
            <div class="nav-wrapper black">
                <a href="index.html" class="brand-logo">
                <img width="90px" height="50px" src="<?= base_url() ?>Plantilla/img/Logo_2.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <!--li><a href="marcas.html">Marcas</a></li-->
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
            <form class="col s12" method="POST" action="<?= base_url('index.php/Setting/Agregar') ?>">
                
                <div class="row z-depth-4">

                    <div>
                        <div class="PCS">
                        <p class="tituloConfig">Home</p>
                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[3]->nombre; ?>">
                                        <!--textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1"></label-->
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <!--input type="text" name="texto" value="<?= $ContenidoTextos[4]->Texto; ?>"-->
                                        <textarea id="textarea4" class="materialize-textarea"></textarea>
                                        <!--label for="textarea1"></label-->
                                    </div>        
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[4]->nombre; ?>">
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea5" class="materialize-textarea"></textarea>
                                    </div>        
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[5]->nombre; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea6" class="materialize-textarea"></textarea>
                                    </div>        
                                </div>
                                <!--div><?= var_dump($ContenidoTextos[1]->Texto); ?></div-->
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[0]->nombre; ?>">
                                        <!--textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1"></label-->
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <!--input type="text" name="texto" value="<?= $ContenidoTextos[0]->Texto; ?>"-->
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <!--label for="textarea1"></label-->
                                    </div>        
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[1]->nombre; ?>">
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea"></textarea>
                                    </div>        
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[2]->nombre; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea3" class="materialize-textarea"></textarea>
                                    </div>        
                                </div>
                                <!--div><?= var_dump($ContenidoTextos[1]->Texto); ?></div-->
                            </div>

                        </div>
                    </div>
                    <br><br><br>
                    <div>

                        <div class="">
                            <p class="tituloConfig">Nosotros</p>
                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[6]->nombre; ?>">
                                        <!--textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1"></label-->
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <!--input type="text" name="texto" value="<?= $ContenidoTextos[0]->Texto; ?>"-->
                                        <textarea id="textarea7" class="materialize-textarea"></textarea>
                                        <!--label for="textarea1"></label-->
                                    </div>        
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[7]->nombre; ?>">
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea8" class="materialize-textarea"></textarea>
                                    </div>        
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[8]->nombre; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea9" class="materialize-textarea"></textarea>
                                    </div>        
                                </div>
                                <!--div><?= var_dump($ContenidoTextos[1]->Texto); ?></div-->
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[9]->nombre; ?>">
                                        <!--textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1"></label-->
                                        <!--?php var_dump($ContenidoTextos); ?-->
                                    </div>
                                </div>

                            </div>

                            <div class="col s6">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <!--input type="text" name="texto" value="<?= $ContenidoTextos[0]->Texto; ?>"-->
                                        <textarea id="textarea10" class="materialize-textarea"></textarea>
                                        <!--label for="textarea1"></label-->
                                    </div>        
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                        <i class="material-icons right">send</i>
                </button>


            </form>
        </div>
    </div>

<br><br><br>


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

        $('#textarea1').val('<?= $ContenidoTextos[0]->Texto; ?>');
        /**$('#textarea2').val('<?= $ContenidoTextos[1]->Texto; ?>');*/
        $('#textarea3').val('<?= $ContenidoTextos[2]->Texto; ?>');
        $('#textarea4').val('<?= $ContenidoTextos[3]->Texto; ?>');
        $('#textarea5').val('<?= $ContenidoTextos[4]->Texto; ?>');
        $('#textarea6').val('<?= $ContenidoTextos[5]->Texto; ?>');
        $('#textarea7').val('<?= $ContenidoTextos[6]->Texto; ?>');
        $('#textarea8').val('<?= $ContenidoTextos[7]->Texto; ?>');
        $('#textarea9').val('<?= $ContenidoTextos[8]->Texto; ?>');
        $('#textarea10').val('<?= $ContenidoTextos[9]->Texto; ?>');


    });
</script>

</html>
