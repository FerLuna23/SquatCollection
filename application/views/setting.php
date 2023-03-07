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
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <!--input type="text" name="texto" value="<?= $ContenidoTextos[4]->Texto; ?>"-->
                                        <textarea id="textarea4" class="materialize-textarea"></textarea>
                                        <!--label for="textarea1"></label-->
                                    </div> <br> 
                                    <div class="col s2">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea5" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                    </div>
         
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[5]->nombre; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea6" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                    </div>       
                                </div>
                                <!--div><?= var_dump($ContenidoTextos[1]->Texto); ?></div-->
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <!--input type="text" name="texto" value="<?= $ContenidoTextos[0]->Texto; ?>"-->
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <!--label for="textarea1"></label-->
                                    </div> <br> 
                                    <div class="col s2">
                                    <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[0]->Nombre ?>', '<?= $ContenidoImgInicio[0]->Ruta ?>')"><i class="material-icons">add</i></a>
                                    </div>         
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea2" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                        <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[1]->Id ?>', '<?= $ContenidoImgInicio[1]->Nombre ?>', '<?= $ContenidoImgInicio[1]->Ruta ?>')"><i class="material-icons">add</i></a>
                                    </div>         
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[2]->nombre; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea3" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                        <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[2]->Id ?>', '<?= $ContenidoImgInicio[2]->Nombre ?>', '<?= $ContenidoImgInicio[2]->Ruta ?>')"><i class="material-icons">add</i></a>
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
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea7" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                        <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[3]->Id ?>', '<?= $ContenidoImgInicio[3]->Nombre ?>', '<?= $ContenidoImgInicio[3]->Ruta ?>')"><i class="material-icons">add</i></a>
                                    </div>          
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea8" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                        <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[4]->Id ?>', '<?= $ContenidoImgInicio[4]->Nombre ?>', '<?= $ContenidoImgInicio[4]->Ruta ?>')"><i class="material-icons">add</i></a>
                                    </div>          
                                </div>
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
                                <div>
                                    <p class="tituloText"> <strong> Título</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="text" name="titulo" value="<?= $ContenidoTextos[8]->nombre; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea9" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                        <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[5]->Id ?>', '<?= $ContenidoImgInicio[5]->Nombre ?>', '<?= $ContenidoImgInicio[5]->Ruta ?>')"><i class="material-icons">add</i></a>
                                    </div>          
                                </div>
                                <!--div><?= var_dump($ContenidoTextos[1]->Texto); ?></div-->
                            </div>

                        </div>

                        <div class="col s12">
                            <div class="col s5">
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

                            <div class="col s7">

                                <div>
                                    <p class="contenidoText"> <strong> Contenido</strong></p>
                                </div>
                                <div>
                                    <div class="input-field col s10">
                                        <textarea id="textarea10" class="materialize-textarea"></textarea>
                                    </div> <br> 
                                    <div class="col s2">
                                    <a class="btn-floating btn-large waves-effect btn red" onClick="verModal('<?= $ContenidoImgInicio[6]->Id ?>', '<?= $ContenidoImgInicio[6]->Nombre ?>', '<?= $ContenidoImgInicio[6]->Ruta ?>')"><i class="material-icons">add</i></a>
                                    </div>          
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                        <i class="material-icons right">send</i>
                </button>

                <!-- Modal Trigger -->
                <!--a class="btn-floating btn-large waves-effect btn modal-trigger red" href="#modal1"><i class="material-icons">add</i></a>
                <a class="waves-effect btn modal-trigger" href="#modal1">Modal</a-->

                <!-- Modal Structure -->


            </form>

            

                <div id="modal1" class="modal">
                        <div class="modal-content">
                            <div class="row" id="IM">
                                <img class="materialboxed" id="img-modal" width="650" src="<?= base_url() ?>Plantilla/img/ADE.jpeg">
                            </div>
                            <form class="col s12" id="form-aviso-create">
                                <div class="input-field col s12">
                                    <div class="file-field input-field">
                                        <legend style="font-weight: bold;">Subir Foto</legend>
                                        <div class="btn js-bgcolor-c">
                                            <i class="material-icons">file_upload</i>
                                            <input id="imagen_new" type="file" name="files[]" accept="image/*">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Cargar foto .jpg, .png">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>

                                <input type="hidden" id="url" name="url" value="0">
                                <input type="hidden" id="id" name="id" value="0">
                            </form> 
                        </div>

                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                        </div>

                </div>
            
        </div>
    </div>

    <br>


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
        $('#textarea2').val('<?= $ContenidoTextos[1]->Texto; ?>');
        $('#textarea3').val('<?= $ContenidoTextos[2]->Texto; ?>');
        $('#textarea4').val('<?= $ContenidoTextos[3]->Texto; ?>');
        $('#textarea5').val('<?= $ContenidoTextos[4]->Texto; ?>');
        $('#textarea6').val('<?= $ContenidoTextos[5]->Texto; ?>');
        $('#textarea7').val('<?= $ContenidoTextos[6]->Texto; ?>');
        $('#textarea8').val('<?= $ContenidoTextos[7]->Texto; ?>');
        $('#textarea9').val('<?= $ContenidoTextos[8]->Texto; ?>');
        $('#textarea10').val('<?= $ContenidoTextos[9]->Texto; ?>');


    });


    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('#modal1').modal('open');
    $('#modal1').modal('close');
    });

    $('#form-aviso-create').submit(function(event) {
        event.preventDefault();
        var datos = new FormData(this);
    //
    $.ajax({
        url: `<?= base_url('index.php/setting/UpdateImage') ?>`,
        type: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false

      }).done(function(response, textStatus, jqXHR) {
        //console.log(response);
        var json = $.parseJSON(response);
        //console.log(json);
        alert(json.message);

        if (json.status) { location.reload(); }

      }).fail(function(jqXHR, textStatus, thrown) {
        
        var resp = jqXHR.responseText;
        console.log(resp);
        alert('Error inesperado');
      });
    });

    const verModal = (id, img, url) => {
        
        $('#id').val(id);
        $('#url').val(url);
        $('#img-modal').attr('src', '<?= base_url() ?>' + `${url}/${img}`);
        $('#modal1').modal('open');

    }



</script>

</html>
