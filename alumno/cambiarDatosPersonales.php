<?php
$id_url = "cambiar_datos_personales";
require_once('../config/conexion.php');
require_once('./controlAcceso.php');
require_once('./arregloCarrerasDelAlumno.php');
require_once('./verificarPlazos.php');
//die($_SESSION['apellido']."**");
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
                               <p>Apellido:
                               <span><?=$_SESSION['apellido'];?></span>
                               </p>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>Nombre:
                                  <span><?=$_SESSION['nombre'];?></span>
                               </p>
                           </div>
                      </div>
                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>DNI:
                                  <span><?=$_SESSION['dni'];?></span>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>Calle:
                                  <span><?=$_SESSION['domicilioCalle'];?></span>
                                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalEditarCalle"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>Numero:
                                  <span><?=$_SESSION['domicilioNumero'];?></span>
                                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalEditarNumero"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>Dpto:
                                  <span><?=$_SESSION['domicilioDpto'];?></span>
                                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalEditarDpto"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>Celular:
                                  <span><?=$_SESSION['telefono'];?></span>
                                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalEditarCelular"><i class="material-icons">edit</i></a>
                               </p>
                           </div>
                      </div>

                      <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-6">
                               <p>Email:
                                  <span><?=$_SESSION['email'];?></span>
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
                                     <input type="email" class="form-control" name="inputCalle" id="inputCalle" maxlength="40" placeholder="Ingrese nuevo calle">
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
          <h5 id="exampleModalLabel" style="font-size: 18px;">Modificar Numero</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="formModificarNumero" id="formModificarNumero">
        <div class="modal-body">
               <div class="form-row">
                                 <div class="form-group col-md-12">
                                     <label for="inputNumero">Numero</label>
                                     <input type="email" class="form-control" name="inputNumero" id="inputNumero" maxlength="40" placeholder="Ingrese nuevo Numero">
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
                                     <label for="inputDpto">Celular</label>
                                     <input type="text" class="form-control" name="inputCelular" id="inputCelular" maxlength="40" placeholder="Ingrese nuevo Celular">
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
                                     <label for="inputEmail">Email</label>
                                     <input type="email" class="form-control" name="inputEmail" id="inputEmail" maxlength="40" placeholder="Ingrese nuevo email">
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
    $('#modalEditarEmail').on('shown.bs.modal', function () {
      $('#inputEmail').val('');
    })

    $( "#formModificarEmail" ).submit(function(event) {
       event.preventDefault();
       var parametros = $(this).serialize();
         $.ajax({
           type: "POST",
           url: "ajax/alumnoEditarEmail.php",
           data: parametros,
           success: function(datos){
             $('#inputEmail').val('');
             $("#spn_email").html(datos);
             $('#modalEditarEmail').modal('hide');
           }
         });
       });


});


                </script>
              </body>
              </html>
