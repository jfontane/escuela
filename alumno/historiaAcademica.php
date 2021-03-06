<?php
$id_url = "historia_academica";
require_once('../config/conexion.php');
require_once('./controlAcceso.php');
require_once('./optionsCarrerasDelAlumno.php');

?>

<!doctype html>
<html lang="es">
<head>
  <title>Escuela Normal Superior 40 - Gestion de Alumnado</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../public/img/favicon.ico">
  <!-- css custom bootstrap theme -->
  <link rel="stylesheet" href="../public/css/custom.css" type="text/css">
  <!-- assets fonts -->
  <link rel="stylesheet" href="https://www.santafe.gob.ar/assets/standard/css/fonts.css" type="text/css">
  <style>

  /* fallback */
  @font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: url(../public/assets/material-design-icons/MaterialIcons-Regular.eot); /* For IE6-8 */
    src: local('Material Icons'),
    local('MaterialIcons-Regular'),
    url(../public/assets/material-design-icons/MaterialIcons-Regular.woff2) format('woff2'),
    url(../public/assets/material-design-icons/MaterialIcons-Regular.woff) format('woff'),
    url(../public/assets/material-design-icons/MaterialIcons-Regular.ttf) format('truetype');
  }

  .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -moz-font-feature-settings: 'liga';
    -moz-osx-font-smoothing: grayscale;
  }
  </style>
</head>


<body>
  <?php include('navbar.php'); ?>
  <main role="main" class="container">
    <div class="row row-top">
      <div class="col-lg-12">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-light mb-12">
          <div class="card-header"><b><h1>Historia Academica</h1></b></div>
          <div class="card-body">
                   <fieldset>
                   <legend>Carrera</legend>
                   <form id="formu">
                     <div class="form-row">
                           <div class="form-group col-md-4">
                                  <select id='selectCarreras' name='selectCarreras' class="form-control" required>
                                   <?php
                                          echo crearOptions();
                                    ?>
                                  </select>
                 </div>
               </div>
             </form>
               </fieldset>


<?php //include_once('horarioTds.html'); ?>

<div class="row text-left">
      <div class="col-sm-12 col-md-12 text-left" id="div_resultado">
      </div>
</div>
</div>
  <div class="modal-footer">

  </div>
</div>

          <div class="card-footer">

            <h3 align='left'>Redes Sociales</h3>
            <table border="0" cellpadding="1" cellspacing="1" style="width:250px;">

              <tbody>
                <tr>
                  <td><a href="https://www.facebook.com/ens40marianomoreno/" rel="noreferrer" target="_blank"><img alt="" src="../public/img/facebook.png" style="width: 31px;" /></a></td>
                  <td><a href="https://instagram.com/" rel="noreferrer" target="_blank"><img alt="" src="../public/img/Instagram.png" style="width: 31px;" /></a></td>
                  <td><a href="https://twitter.com/" rel="noreferrer" target="_blank"><img alt="" src="../public/img/Twitter.png" style="width: 31px;" /></a></td>
                  <td><img alt="" src="../public/img/WhatsApp.png" style="width: 31px;" />&nbsp;
                  <strong><span style="font-size:12px;"><a href='https://api.whatsapp.com/send?phone=5428800&text=Hola!%20Necesito%20Informacion' target='_blank'>342 7777-8800</a></span></strong></td>
                </tr>
              </tbody>
            </table>


          </div>

        </div>

      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <p class="float-right">
          <a href="#"><i class="material-icons">keyboard_arrow_up</i></a>
        </p>
      </div>
    </div>


  </main>

  <div class="clearfix"><br></div>

  <?php include_once('../footer.php'); ?>


                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="../public/assets/jquery/jquery-3.2.1.slim/jquery-3.2.1.min.js"></script>
                <script src="../public/assets/popper.js/1.12.3/umd/popper.min.js"></script>
                <script src="../public/assets/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
                <script>

$(document).ready(function(){
    $('#selectCarreras').change(function(){
      var idCarrera = $(this).val();
      parametros = {'idCarrera':idCarrera}
      $.ajax({
        url:'ajax/generarHistoriaAcademicaPorCarrera.php',
        method: "POST",
        data: parametros,
        success:function(data){
          $("#div_resultado").html(data).fadeIn('slow');
        }
      });
    });
});

//generarHistoriaAcademicaPorCarrera.php?idCarrera="+opcionSeleccionada
/*
			    if (ajax.responseText==1) location.href="alumno/menuEscritorio.php";
			    else if (ajax.responseText==2) location.href="profesor/menuEscritorio.php";
			    else divResultado.innerHTML = "<font color='red'><b>Error:</b> El Usuario/Contrase&ntilde;a es Invalido!!!</font>";

*/

                </script>
              </body>
              </html>
