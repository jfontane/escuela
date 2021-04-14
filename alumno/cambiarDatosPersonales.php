<?php
$id_url = "cambiar_password";
require_once('../config/conexion.php');
require_once('./controlAcceso.php');
require_once('./arregloCarrerasDelAlumno.php');
require_once('./verificarPlazos.php');
$sql="SELECT * FROM persona WHERE dni={$_SESSION[dni]}";
$consulta=mysqli_query($conex,$sql);
$filas=mysqli_fetch_assoc($consulta);
$num_rows = mysqli_num_rows($consulta);
if ($num_rows==1) {
  $vApellido=$filas['apellido'];
  $vNombre=$filas['nombre'];
  $vDni=$_SESSION['usuario'];
  $vDomicilioCalle=$filas['domicilioCalle'];
  $vDomicilioNumero=$filas['domicilioNumero'];
  $vDomicilioDpto=$filas['domicilioDpto'];
  $vTelefonoNumero=$filas['telefono'];
  $vMail=$filas['email'];
}
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


            <form method="POST" action="#" name='formulario' id='formulario'>
                <h2>DATOS DEL ALUMNO</h2>
                      <div class="form-row">
                           <div class="form-group col-xs-12 col-sm-4 col-md-6">
                               <label for="vApellido">Apellido</label>
                               <input type="text" id="vApellido" name="vApellido" maxlength="45" value="<?php echo $vApellido;?>" class="form-control" readonly>
                           </div>
                      </div>
                      <div class="form-row">
                           <div class="form-group col-xs-12 col-sm-4 col-md-6">
                               <label for="vNombre">Nombre</label>
                               <input type="text" id="vNombre" name="vNombre" maxlength="45" value="<?php echo $vNombre;?>" class="form-control" readonly>
                           </div>
                      </div>
                      <div class="form-row">
                           <div class="form-group col-xs-12 col-sm-4 col-md-6">
                               <label for="vDni">DNI</label>
                               <input type="text" id="vDni" name="vDni" maxlength="8" value="<?php echo $_SESSION['usuario'];?>" class="form-control" maxlength="16" readonly>
                           </div>
                      </div>

                        <div class="form-row">
                             <div class="form-group col-xs-12 col-sm-4 col-md-6">
                                 <label for="inputPassword">Calle</label>
                                 <input type="text" id="vDomicilioCalle" name="vDomicilioCalle" value="<?php echo strtoupper($vDomicilioCalle);?>" class="form-control" required maxlength="16">
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-4 col-md-6">
                              <label for="inputPassword2">Numero</label>
                              <input type="text" id="vDomicilioNumero" name="vDomicilioNumero" value="<?php echo $vDomicilioNumero;?>" class="form-control" required maxlength="16">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-4 col-md-6">
                              <label for="inputPassword2">Dpto</label>
                              <input type="text" id="vDomicilioDpto" name="vDomicilioDpto" class="form-control" value="<?php echo $vDomicilioDpto;?>" required maxlength="16">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-4 col-md-6">
                              <label for="inputPassword2">Telefono</label>
                              <input type="text" id="vTelefonoNumero" name="vTelefonoNumero" value="<?php echo $vTelefonoNumero;?>" class="form-control" required maxlength="16">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-4 col-md-6">
                              <label for="inputPassword2">Email</label>
                              <input type="text" id="vMail" name="vMail" class="form-control" value="<?php echo $vMail;?>" required maxlength="16">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-4 col-md-6">
                              <input name="btnModificar" type="button" id="btnModificar" value="  Modificar  " onClick="modificar()" class="btn btn-success"/>&nbsp;&nbsp;
                      			  <input name="btnAceptar" type="reset" id="btnAceptar" value="Aplicar Cambios"  onClick="validaFormModificacionDatosAlumno()"   class="btn btn-success" disabled="disabled"/>
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

  <div class="clearfix"><br></div>

  <?php include_once('../footer.php'); ?>


                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="../public/assets/jquery/jquery-3.2.1.slim/jquery-3.2.1.min.js"></script>
                <script src="../public/assets/popper.js/1.12.3/umd/popper.min.js"></script>
                <script src="../public/assets/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
                <script>

$(document).ready(function(){

  $( "#formCambiarPwd" ).submit(function(event) {
     event.preventDefault();
     var parametros = $(this).serialize();
     var p1 = $('#inputPassword').val();
     var p2 = $('#inputPassword2').val();
     if (p1==p2) {
       $.ajax({
         type: "POST",
         url: "ajax/cambiarPassword.php",
         data: parametros,
         success: function(datos){
              if (datos==1) {
                  //$(location).attr('href','menuEscritorio.php');
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b> Existen Campos Vacios.</div>');
              } else if (datos==2) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b> Los valores de la Contraseña no coinciden.</div>');
              } else if (datos==3) {
                  $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b> No se pudo realizar la consulta.</div>');
              } else if (datos==100) {
                  $("#resultado").html('<div class="alert alert-success" role="alert"><b>Atenci&oacute;n:</b> La contraseña fue modificada Exitosamente.</div>');
                  $("#inputPassword").prop('disabled', true);
                  $("#inputPassword2").prop('disabled', true);

              }
         }
       });
     } else {
       $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b> No coincide la Contraseña y su Confirmacion.</div>');
     };
     });


});


                </script>
              </body>
              </html>
