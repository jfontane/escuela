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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        <h1>Notificaciones Digitales</h1>

        <p>Caja de Jubilaciones de la Provincia</p>

        <div class="cover">
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-light mb-12">
          <div class="card-header">Notificacion: </div>


          <div class="card-body">

            <form id="formAcceder">


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>

            </form>

          </div>

          <div class="card-footer" id="resultado">

          </div>

        </div>

      </div>
    </div>


    <!-- Modal -->

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

           $('#modalAcceder').on('shown.bs.modal', function () {
             $('#inputEmail').val('');
             $('#inputPassword').val('');
           })

                 $( "#formAcceder" ).submit(function(event) {
                    event.preventDefault();
                    var parametros = $(this).serialize();
                      $.ajax({
                        type: "POST",
                        url: "autenticarAdmin.php",
                        data: parametros,
                        success: function(datos){
                          if (datos=='Si') {
                              $(location).attr('href','consultaAccesosListado.php');
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
