<?php
  session_start();
  session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
  <title>Caja Jubilaciones - Notificaciones</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://www.santafe.gob.ar/assets/standard/images/favicon.ico">
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
      src="https://www.santafe.gob.ar/assets/standard/images/gob-santafe.png"></a>
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
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalGenerar">Generar Clave<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAcceder">Acceder<span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>

  <main role="main" class="container">
    <div class="row row-top">

      <div class="col-lg-12">
        <div class="cover">

        </div>
        <h1>Sistema de Documentaci&oacute;n Digital</h1>

      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-light mb-12">
          <div class="card-header"><b>Atenci&oacute;n:</b></div>
          <div class="card-body">
<p style = "font-family:'aller', sans-serif;font-size: 13px;" align="justify">Desde la Caja de Jubilaciones y Pensiones queremos darte la bienvenida a esta nueva etapa de tu vida.
<br>Para nosotros, tambi&eacute;n representa un momento de cambios, innovando en las formas de comunicarnos con nuestros afiliados y beneficiarios, buscando alternativas para hacerles llegar en forma segura y ágil toda la documentación y las noticias que correspondan.
            </p>
<p style = "font-family:'aller', sans-serif;font-size: 13px;" align="justify">Para acceder a las notificaciones deber&aacute; generar una clave de acceso o contrase&ntilde;a.
  Esto se hace desde la opci&oacute;n <b>"Generar Clave"</b>. Una vez en la ventana de "Generar Clave", deber&aacute; ingresar el email que consign&oacute; en la Caja de Jubilaciones, y un c&oacute;digo de seguridad que se muestra en una imagen (Captcha). Una vez realizado el proceso anterior se le enviar&aacute; la clave o contrase&ntilde;a generada a su casilla de email (si no le llego la clave o contrase&ntilde;a a su casilla de email, verificarlo en Correo no deseado o SPAM).
<br>Para poder ver sus notificaciones digitales deber&aacute; hacerlo a trav&eacute;s de la opci&oacute;n <b>"Acceder"</b>, ingresando el email y la clave o contrase&ntilde;a (que le fue enviada por email).
<br><br>Te recomendamos que nos sigas en nuestras redes sociales, para mantenerte al tanto de las novedades, y que ante cualquier duda te comuniques al Nº <b>0800 444 3734</b> o por Whatsapp al Nº <b>342 512-8800</b>.
</p>
<hr>
<h3 align='left'>Redes Sociales</h3>
<table border="0" cellpadding="1" cellspacing="1" style="width:250px;">

  <tbody>
    <tr>
      <td><a href="https://www.facebook.com/cajasantafe/" rel="noreferrer" target="_blank"><img alt="" src="./public/img/facebook.png" style="width: 31px;" /></a></td>
      <td><a href="https://instagram.com/cajajubisantafe?igshid=yj57j024a7n1" rel="noreferrer" target="_blank"><img alt="" src="./public/img/Instagram.png" style="width: 31px;" /></a></td>
      <td><a href="https://twitter.com/caja_sf" rel="noreferrer" target="_blank"><img alt="" src="./public/img/Twitter.png" style="width: 31px;" /></a></td>
      <td><img alt="" src="./public/img/WhatsApp.png" style="width: 31px;" />&nbsp;
      <strong><span style="font-size:12px;"><a href='https://api.whatsapp.com/send?phone=5493425128800&text=Hola!%20Necesito%20Informacion' target='_blank'>342 512-8800</a></span></strong></td>
    </tr>
  </tbody>
</table>
<!--
            <table border="0" cellpadding="1" cellspacing="1" style="width:500px;">
              <tbody>
                <tr>
                  <td><span style="font-size:12px;"><img alt="" src="./public/img/facebook.png" style="width: 31px;" /></span></td>
                  <td style="text-align: left;"><strong><span style="font-size:12px;"><a href="https://www.facebook.com/cajasantafe/" rel="noreferrer" target="_blank">https://www.facebook.com/cajasantafe/</a></span></strong></td>
                </tr>
                <tr>
                  <td><span style="font-size:12px;"><img alt="" src="./public/img/Instagram.png" style="width: 31px;" /></span></td>
                  <td style="text-align: left;"><strong><span style="font-size:12px;"><a href="https://instagram.com/cajajubisantafe?igshid=yj57j024a7n1" rel="noreferrer" target="_blank">https://instagram.com/cajajubisantafe?igshid=yj57j024a7n1</a></span></strong></td>
                </tr>
                <tr>
                  <td><span style="font-size:12px;"><strong><img alt="" src="./public/img/Twitter.png" style="width: 31px;" /></strong></span></td>
                  <td style="text-align: left;"><strong><span style="font-size:12px;"><a href="https://twitter.com/caja_sf" rel="noreferrer" target="_blank">https://twitter.com/caja_sf</a></span></strong></td>
                </tr>
                <tr>
                  <td><span style="font-size:12px;"><img alt="" src="./public/img/WhatsApp.png" style="width: 31px;" /></span></td>
                  <td style="text-align: left;"><strong><span style="font-size:12px;"><a href='https://api.whatsapp.com/send?phone=5493425128800&text=Hola!%20Necesito%20Informacion' target='_blank'>342 512-8800</a></span></strong></td>
                </tr>
              </tbody>
            </table> -->
      <br>
    <div class="alert alert-info" role="alert">
  <b>¿Problemas con el Acceso o la generaci&oacute;n de la Contrase&ntilde;a?.</b> <br>
  Comun&iacute;quese al siguiente numero telef&oacute;nico: <b>&Aacute;REA INFORM&Aacute;TICA: Teléfono: 0342 - 4846400 Interno: 37842</b>
</div>
            <hr>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalGenerar">
  Generar Clave
</button>
&nbsp;&nbsp;
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAcceder">
  Ingresar
</button>


            <br><br>

          </div>

          <div class="card-footer" id="resultado">


          </div>

        </div>

      </div>
    </div>

    <!-- MODAL GENERAR CLAVE -->
    <div class="modal fade" id="modalGenerar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" style="font-size: 18px;">Generar Clave</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form name="formGenerar" id="formGenerar">
          <div class="modal-body">
                 <div class="form-row">
                                   <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                       <label for="inputEmail">Email</label>
                                       <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Ingrese Email">
                                   </div>
                </div>
                <div class="form-row">
                                  <div class="form-group col-xs-3 col-sm-3">
                                      <img src="CaptchaSecurityImages.php?width=80&height=30&characters=5" alt="" id='img_captcha'/>

                                  </div>
                                  <div class="form-group col-xs-6 col-sm-6">
                                      <input type="input" class="form-control" name="inputCaptcha" id="inputCaptcha" maxlength="5" placeholder="Ingrese Codigo de la Imagen">
                                    <!--  <input name="security_code" type="text" id="security_code" maxlength="5" class="inputText" style="width:90px" /> -->
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

    <!-- MODAL ACCEDER -->
    <div class="modal fade" id="modalAcceder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" style="font-size: 18px;">Acceder</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form name="formAcceder" id="formAcceder">
          <div class="modal-body">
                 <div class="form-row">
                                   <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                       <label for="inputEmail">Email</label>
                                       <input type="email" class="form-control" name="inputEmail" id="inputEmailAcceder" placeholder="Ingrese Email">
                                   </div>

                </div>
                <div class="form-row">
                  <div class="form-group col-xs-12 col-sm-12 col-md-12">
                      <label for="inputPassword">Contraseña</label>
                      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Ingrese Contraseña">
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

    <div class="row">
      <div class="col-12">
        <p class="float-right">
          <a href="#"><i class="material-icons">keyboard_arrow_up</i></a>
        </p>
      </div>
    </div>


  </main>

  <div class="clearfix"><br></div>

  <footer class="footer text-muted">
    <div class="container-fluid">
      <div class="row">

        <div class="offset-md-2 col-md-3">
          <div class="sociales">
            <p><a href="/index.php/web/content/view/full/117678">RSS / SUSCRIPCIÓN A NOTICIAS</a></p>
            <ul class="list-inline footer-ul">
              <li class="list-inline-item"><a target="_blank" href="http://www.twitter.com/GobSantaFe"><i
                class="icon-footertwitter"></i></a></li>
                <li class="list-inline-item"><a target="_blank" href="http://www.facebook.com/GobSantaFe"><i
                  class="icon-footerfacebook"></i></a>
                </li>
                <li class="list-inline-item"><a target="_blank" href="http://gplus.to/GobSantaFe"><i
                  class="icon-footerg"></i></a></li>
                  <li class="list-inline-item"><a target="_blank" href="http://gobsantafe.tumblr.com/"><i
                    class="icon-footertumblr"></i></a>
                  </li>
                  <li class="list-inline-item"><a target="_blank" href="http://www.youtube.com/GobSantaFe"><i
                    class="icon-footeryoutube"></i></a></li>
                    <li class="list-inline-item"><a target="_blank" href="http://instagram.com/gobsantafe"><i
                      class="icon-footerinstagram"></i></a></li>
                      <li class="list-inline-item"><a target="_blank" href="https://es.foursquare.com/gobsantafe"><i
                        class="icon-footerfoursquare"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="https://storify.com/GobSantaFe"><i
                          class="icon-footerstorify"></i></a>
                        </li>
                        <li class="list-inline-item"><a target="_blank"
                          href="http://www.linkedin.com/company/gobierno-de-la-provincia-de-santa-fe"><i
                          class="icon-footerlinkedin"></i></a></li>
                        </ul>
                      </div>

                    </div>

                    <div class="col-md-3">

                      <div class="marca">
                        <img src="https://www.santafe.gob.ar/assets/app/portal/imgs/marca-footer.png" alt="Santa Fe">
                        <p>Atención telefónica: 0800-777-0801 </p>
                        <p>Lunes a viernes de 8 a 18 hs </p>
                        <p><span class="cc">c</span> Atribución-CompartirIgual 2.5 Argentina</p>
                      </div>


                    </div>

                    <div class="col-md-3">

                      <div class="stg-logos-contenedor">
                        <div class="stg-logos">
                          <a href="https://www.santafe.gob.ar/tecnologias" target="_blank"><span
                            class="stg-logos-logo-tec-stg"></span></a>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                </footer>

                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="./public/assets/jquery/jquery-3.2.1.slim/jquery-3.2.1.min.js"></script>
                <script src="./public/assets/popper.js/1.12.3/umd/popper.min.js"></script>
                <script src="./public/assets/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
                <script>

$(document).ready(function(){

           $('#modalGenerar').on('shown.bs.modal', function () {
             $('#inputEmail').val('');
             $('#inputCaptcha').val('');
             $('#img_captcha').attr('src','CaptchaSecurityImages.php?width=80&height=30&characters=5')
           })

           $('#modalAcceder').on('shown.bs.modal', function () {
             $('#inputEmailAcceder').val('');
             $('#inputPassword').val('');
           })

            $( "#formGenerar" ).submit(function(event) {
               event.preventDefault();
               var parametros = $(this).serialize();
                 $.ajax({
                   type: "POST",
                   url: "ajax/generarClave.php",
                   data: parametros,
                   success: function(datos){
                     $("#resultado").html(datos);
                     $('#modalGenerar').modal('hide');
                   }
                 });
               });

             $( "#formAcceder" ).submit(function(event) {
                event.preventDefault();
                var parametros = $(this).serialize();
                console.log(parametros);
                  $.ajax({
                    type: "POST",
                    url: "ajax/autenticar.php",
                    data: parametros,
                    success: function(datos){
                       if (datos=='1') {
                              $(location).attr('href','boletinListado.php');
                       } else if (datos=='2') {
                              $(location).attr('href','home.php');
                       } else if (datos=='3') {
                              $(location).attr('href','home.php');
                       } else {
                              message=datos;
                              $("#resultado").html(message);
                       }
                       $('#modalAcceder').modal('hide');
                    }
                 });
              });

});



                </script>
              </body>
              </html>
