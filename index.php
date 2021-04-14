<?php
session_start();
session_destroy();
 ?>

<!doctype html>
<html lang="en">
<head>
  <title>Escuela Normal Superior 40 - Gestion de Alumnado</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="./public/img/favicon.ico">
  <!-- css custom bootstrap theme -->
  <link rel="stylesheet" href="./public/css/custom.css" type="text/css">
  <!-- assets fonts -->
  <link rel="stylesheet" href="https://www.santafe.gob.ar/assets/standard/css/fonts.css" type="text/css">
  <style>

  /* fallback */
  @font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: url(./public/assets/material-design-icons/MaterialIcons-Regular.eot); /* For IE6-8 */
    src: local('Material Icons'),
    local('MaterialIcons-Regular'),
    url(./public/assets/material-design-icons/MaterialIcons-Regular.woff2) format('woff2'),
    url(./public/assets/material-design-icons/MaterialIcons-Regular.woff) format('woff'),
    url(./public/assets/material-design-icons/MaterialIcons-Regular.ttf) format('truetype');
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
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <a class="navbar-brand" href="#"><img
      src="./public/img/logo.png" width="100"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="material-icons">home</i><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAcceder">Institucional<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAcceder">Campus Virtual<span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>

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
<form name="formAcceder" id="formAcceder">
<div class="modal-body">
        <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputPerfil">Perfil</label>

                <select id="inputPerfil" name="inputPerfil" class="form-control" required>
                    <option value='' selected>Seleccione Perfil</option>
                    <option value='2' >Profesor</option>
                    <option value='1' >Alumno</option>
                </select>
              </div>
        </div>

       <div class="form-row">
              <div class="form-group col-xs-12 col-sm-4 col-md-4">
                    <label for="inputUsuario">Usuario</label>
                    <input type="text" class="form-control" name="inputUsuario" id="inputUsuario" placeholder="Ingrese DNI">
              </div>

      </div>

      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-4 col-md-4">
            <label for="inputPassword">Contraseña</label>
            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Ingrese Contraseña">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-xs-12 col-sm-12 col-md-12" id="resultado">

        </div>
      </div>

</div>
<div class="modal-footer">

</div>
</form>

    <div class="alert alert-info" role="alert">
  <b>¿Problemas con el Acceso o la generaci&oacute;n de la Contrase&ntilde;a?.</b> <br>
</div>
          </div>

          <div class="card-footer">

            <h3 align='left'>Redes Sociales</h3>
            <table border="0" cellpadding="1" cellspacing="1" style="width:250px;">

              <tbody>
                <tr>
                  <td><a href="https://www.facebook.com/ens40marianomoreno/" rel="noreferrer" target="_blank"><img alt="" src="./public/img/facebook.png" style="width: 31px;" /></a></td>
                  <td><a href="https://instagram.com/" rel="noreferrer" target="_blank"><img alt="" src="./public/img/Instagram.png" style="width: 31px;" /></a></td>
                  <td><a href="https://twitter.com/" rel="noreferrer" target="_blank"><img alt="" src="./public/img/Twitter.png" style="width: 31px;" /></a></td>
                  <td><img alt="" src="./public/img/WhatsApp.png" style="width: 31px;" />&nbsp;
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

<?php include_once('footer.php'); ?>
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="./public/assets/jquery/jquery-3.2.1.slim/jquery-3.2.1.min.js"></script>
                <script src="./public/assets/popper.js/1.12.3/umd/popper.min.js"></script>
                <script src="./public/assets/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
                <script>

$(document).ready(function(){
             $( "#formAcceder" ).submit(function(event) {
                event.preventDefault();
                var parametros = $(this).serialize();
                  $.ajax({
                    type: "POST",
                    url: "ajax/autenticar.php",
                    data: parametros,
                    success: function(datos){
                       if (datos=='1') {
                              $(location).attr('href','./alumno/menuEscritorio.php');
                       } else if (datos=='2') {
                              $(location).attr('href','./profesor/profesor.php');
                       } else if (datos=='3') {
                              $("#resultado").html('<div class="alert alert-danger" role="alert"><b>Error:</b> Usuario/Password erroneos.</div>');
                       };                 //$('#modalAcceder').modal('hide');
                    }
                 });
              });

});

/*
			    if (ajax.responseText==1) location.href="alumno/menuEscritorio.php";
			    else if (ajax.responseText==2) location.href="profesor/menuEscritorio.php";
			    else divResultado.innerHTML = "<font color='red'><b>Error:</b> El Usuario/Contrase&ntilde;a es Invalido!!!</font>";

*/

                </script>
              </body>
              </html>
