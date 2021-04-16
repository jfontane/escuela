<?php
$id_url = "cambiar_datos_personales";
require_once('../config/conexion.php');
require_once('./controlAcceso.php');
require_once('./arregloCarrerasDelAlumno.php');
require_once('./verificarPlazos.php');
require_once('../lib/arrayHash.class.php');

$dniHash = ArrayHash::encode(array('dni'=>$_SESSION['dni']));
//die($_SESSION['apellido']."**");
//echo SanitizeVars::EMAIL('jfont-an_e.llaz@ooooo.com');
//die;
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
          <div class="card-header"><b><h1>Sistema de Gestion Academica</h1></b></div>
          <div class="card-body">


                <h2>DATOS DEL ALUMNO</h2>
                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Apellido:</b>
                               <span><?=$_SESSION['apellido'];?></span>
                               </p>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Nombre:</b>
                                  <span><?=$_SESSION['nombre'];?></span>
                               </p>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>DNI:</b>
                                  <span><?=$_SESSION['dni'];?></span>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Calle:</b>
                                  <span id="spn_calle"><?=$_SESSION['domicilioCalle'];?></span>
                                  <a href="#" data-toggle="modal" data-target="#modalEditarCalle"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Numero:</b>
                                  <span id="spn_numero"><?=$_SESSION['domicilioNumero'];?></span>
                                  <a href="#" data-toggle="modal" data-target="#modalEditarNumero"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Dpto:</b>
                                  <span id="spn_dpto"><?=$_SESSION['domicilioDpto'];?></span>
                                  <a href="#" data-toggle="modal" data-target="#modalEditarDpto"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Celular:</b>
                                  <span id="spn_celular"><?=$_SESSION['celular'];?></span>
                                  <a href="#" data-toggle="modal" data-target="#modalEditarCelular"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p><b>Email:</b>
                                  <span id="spn_email"><?=$_SESSION['email'];?></span>
                                  <a href="#" data-toggle="modal" data-target="#modalEditarEmail"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-4 col-md-6">
                      			  <a href='menuEscritorio.php' class="btn btn-info">Volver</a>
                            </div>
                      </div>
            </form>

            <div id="resultado">

            </div>




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

  <!-- Modal Editar Calle-->
  <div class="modal fade" id="modalEditarCalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" style="font-size: 18px;">Modificar Calle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="formModificarCalle" id="formModificarCalle">
        <div class="modal-body">
               <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="inputEmail">Calle</label>
                                     <input type="text" class="form-control" name="inputCalle" id="inputCalle" maxlength="40" placeholder="Ingrese nuevo calle">
                                     <input type="hidden" class="form-control" name="inputHash" id="inputHash" maxlength="100" value="<?=$dniHash?>">
                                 </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Modal -->

  <!-- Modal Editar Numero-->
  <div class="modal fade" id="modalEditarNumero" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" style="font-size: 18px;">Modificar Numero del Domicilio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="formModificarNumero" id="formModificarNumero">
        <div class="modal-body">
               <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="inputNumero">Calle Numero</label>
                                     <input type="text" class="form-control" name="inputNumero" id="inputNumero" maxlength="40" placeholder="Ingrese nuevo Numero">
                                     <input type="hidden" class="form-control" name="inputHash" id="inputHash" maxlength="100" value="<?=$dniHash?>">
                                 </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Modal -->


  <!-- Modal Editar Dpto-->
  <div class="modal fade" id="modalEditarDpto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" style="font-size: 18px;">Modificar Dpto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="formModificarDpto" id="formModificarDpto">
        <div class="modal-body">
               <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="inputDpto">Dpto</label>
                                     <input type="text" class="form-control" name="inputDpto" id="inputDpto" maxlength="40" placeholder="Ingrese nuevo Dpto.">
                                     <input type="hidden" class="form-control" name="inputHash" id="inputHash" maxlength="100" value="<?=$dniHash?>">
                                 </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Modal -->


  <!-- Modal Editar Celular-->
  <div class="modal fade" id="modalEditarCelular" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" style="font-size: 18px;">Modificar Celular</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="formModificarCelular" id="formModificarCelular">
        <div class="modal-body">
               <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="inputDpto"><b>Celular</b>&nbsp;<font color="red">(Sin el 0 del código de área, y Sin el 15 del número)</font></label>
                                     <input type="text" class="form-control" name="inputCelular" id="inputCelular" maxlength="40" placeholder="Ingrese Celular">
                                     <input type="hidden" class="form-control" name="inputHash" id="inputHash" maxlength="100" value="<?=$dniHash?>">
                                 </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Modal -->



  <!-- Modal Editar Email-->
  <div class="modal fade" id="modalEditarEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" style="font-size: 18px;">Modificar Email</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="formModificarEmail" id="formModificarEmail">
        <div class="modal-body">
               <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="inputEmail"><b>Email</b></label>
                                     <input type="email" class="form-control" name="inputEmail" id="inputEmail" maxlength="40" placeholder="Ingrese nuevo email">
                                     <input type="hidden" class="form-control" name="inputHash" id="inputHash" maxlength="100" value="<?=$dniHash?>">
                                 </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Modal -->

  <div class="clearfix"><br></div>

  <?php include_once('../footer.php'); ?>


                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="../public/assets/jquery/jquery-3.2.1.slim/jquery-3.2.1.min.js"></script>
                <script src="../public/assets/popper.js/1.12.3/umd/popper.min.js"></script>
                <script src="../public/assets/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
                <script>

$(document).ready(function(){
    $('#modalEditarCalle').on('shown.bs.modal', function () {
      $('#inputCalle').val('');
    })

    $('#modalEditarNumero').on('shown.bs.modal', function () {
      $('#inputNumero').val('');
    })

    $('#modalEditarDpto').on('shown.bs.modal', function () {
      $('#inputDpto').val('');
    })

    $('#modalEditarCelular').on('shown.bs.modal', function () {
      $('#inputCelular').val('');
    })

    $('#modalEditarEmail').on('shown.bs.modal', function () {
      $('#inputEmail').val('');
    })

    $("#formModificarCalle").submit(function(event) {
       event.preventDefault();
       calle = $('#inputCalle').val();
       hash = $('#inputHash').val();

       var parametros = {'inputCalle':calle,'inputHash':hash};
         $.ajax({
           type: "POST",
           url: "ajax/alumnoEditarCalle.php",
           data: parametros,
           dataType: "json",
           success: function(datos){
               $('#inputCalle').val('');
               $('#modalEditarCalle').modal('hide');
               var estado = "";
               var data = "";
               $.each(datos, function(i, item) {
                   //console.log(i);
                   if (i=='estado') estado = item;
                   else if (i=='data') data = item;
               });
               console.log(estado+'*'+data)

               if (estado==1) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'.</div>');
               } else if (estado==2) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==3) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==100) {
                  $("#spn_calle").html(data);
                  $("#resultado").html('<div class="alert alert-success" role="alert"><b>Atenci&oacute;n:</b> El Email fue <i class="material-icons">edit</i> modificado con &Eacute;xito.</div>');
               };
           }
         });
       });


    $("#formModificarNumero").submit(function(event) {
       event.preventDefault();
       numero = $('#inputNumero').val();
       hash = $('#inputHash').val();

       var parametros = {'inputNumero':numero,'inputHash':hash};
         $.ajax({
           type: "POST",
           url: "ajax/alumnoEditarNumero.php",
           data: parametros,
           dataType: "json",
           success: function(datos){
               $('#inputNumero').val('');
               $('#modalEditarNumero').modal('hide');
               var estado = "";
               var data = "";
               $.each(datos, function(i, item) {
                   //console.log(i);
                   if (i=='estado') estado = item;
                   else if (i=='data') data = item;
               });
               console.log(estado+'*'+data)

               if (estado==1) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'.</div>');
               } else if (estado==2) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==3) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==100) {
                  $("#spn_numero").html(data);
                  $("#resultado").html('<div class="alert alert-success" role="alert"><b>Atenci&oacute;n:</b> El Email fue <i class="material-icons">edit</i> modificado con &Eacute;xito.</div>');
               };
           }
         });
       });


    $("#formModificarDpto").submit(function(event) {
       event.preventDefault();
       dpto = $('#inputDpto').val();
       hash = $('#inputHash').val();

       var parametros = {'inputDpto':dpto,'inputHash':hash};
       //console.log(parametros);
         $.ajax({
           type: "POST",
           url: "ajax/alumnoEditarDpto.php",
           data: parametros,
           dataType: "json",
           success: function(datos){
               $('#inputDpto').val('');
               $('#modalEditarDpto').modal('hide');
               var estado = "";
               var data = "";
               $.each(datos, function(i, item) {
                   //console.log(i);
                   if (i=='estado') estado = item;
                   else if (i=='data') data = item;
               });
               console.log(estado+'*'+data)

               if (estado==1) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'.</div>');
               } else if (estado==2) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==3) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==100) {
                  $("#spn_dpto").html(data);
                  $("#resultado").html('<div class="alert alert-success" role="alert"><b>Atenci&oacute;n:</b> El Email fue <i class="material-icons">edit</i> modificado con &Eacute;xito.</div>');
               };
           }
         });
       });


    $("#formModificarCelular").submit(function(event) {
       event.preventDefault();
       celular = $('#inputCelular').val();
       hash = $('#inputHash').val();

       var parametros = {'inputCelular':celular,'inputHash':hash};
       //console.log(parametros);
         $.ajax({
           type: "POST",
           url: "ajax/alumnoEditarCelular.php",
           data: parametros,
           dataType: "json",
           success: function(datos){
             $('#inputCelular').val('');
             $('#modalEditarCelular').modal('hide');
               var estado = "";
               var data = "";
               $.each(datos, function(i, item) {
                   //console.log(i);
                   if (i=='estado') estado = item;
                   else if (i=='data') data = item;
               });
               console.log(estado+'*'+data)

               if (estado==1) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'.</div>');
               } else if (estado==2) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==3) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==100) {
                  $("#spn_celular").html(data);
                  $("#resultado").html('<div class="alert alert-success" role="alert"><b>Atenci&oacute;n:</b> El Email fue <i class="material-icons">edit</i> modificado con &Eacute;xito.</div>');
               };
           }
         });
       });


    $("#formModificarEmail").submit(function(event) {
       event.preventDefault();
       email = $('#inputEmail').val();
       hash = $('#inputHash').val();

       var parametros = {'inputEmail':email,'inputHash':hash};
       //console.log(parametros);
         $.ajax({
           type: "POST",
           url: "ajax/alumnoEditarEmail.php",
           data: parametros,
           dataType: "json",
           success: function(datos){
             $('#inputEmail').val('');
             $('#modalEditarEmail').modal('hide');
               var estado = "";
               var data = "";
               $.each(datos, function(i, item) {
                   //console.log(i);
                   if (i=='estado') estado = item;
                   else if (i=='data') data = item;
               });
               console.log(estado+'*'+data)

               if (estado==1) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'.</div>');
               } else if (estado==2) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==3) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b>&nbsp;'+data+'</div>');
               } else if (estado==100) {
                  $("#spn_email").html(data);
                  $("#resultado").html('<div class="alert alert-success" role="alert"><b>Atenci&oacute;n:</b> El Email fue <i class="material-icons">edit</i> modificado con &Eacute;xito.</div>');
               };
           }
         });
       });


});


                </script>
              </body>
              </html>
