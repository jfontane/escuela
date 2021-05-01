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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6Ld6Y6oaAAAAAMqMNwMcdEBjkJugmHZ6Nu6Cpc5T"></script>
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
               <h1>Titulo de la aplicación</h1>

               <p>Organismo o dependencia</p>

                                   <div class="cover">
                   </div>
                           </div>

       </div>

                   <div class="row">
               <nav aria-label="breadcrumb" role="navigation">
                   <ol class="breadcrumb">
                                                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item"><a href="#">Library</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Data</li>
                                           </ol>
               </nav>
           </div>

       <div class="row">
           <div class="col-lg-12">
                                   <div class="card bg-light mb-12">
                       <div class="card-header">Pantalla actual</div>


                       <div class="card-body">

                           <form>


                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <label for="inputEmail4">Email</label>
                                       <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="inputPassword4">Password</label>
                                       <input type="password" class="form-control" id="inputPassword4"
                                              placeholder="Password">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="inputAddress">Address</label>
                                   <input type="text" class="form-control" id="inputAddress"
                                          placeholder="1234 Main St">
                               </div>
                               <div class="form-group">
                                   <label for="inputAddress2">Address 2</label>
                                   <input type="text" class="form-control" id="inputAddress2"
                                          placeholder="Apartment, studio, or floor">
                               </div>
                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <label for="inputCity">City</label>
                                       <input type="text" class="form-control" id="inputCity">
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="inputState">State</label>
                                       <select id="inputState" class="form-control">
                                           <option selected>Choose...</option>
                                           <option>...</option>
                                       </select>
                                   </div>
                                   <div class="form-group col-md-2">
                                       <label for="inputZip">Zip</label>
                                       <input type="text" class="form-control" id="inputZip">
                                   </div>
                               </div>


                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <div class="form-check">
                                           <label class="form-check-label">
                                               <input class="form-check-input" type="checkbox"> Check me out
                                           </label>
                                       </div>
                                   </div>
                               </div>

                               <div>
                                   <button type="submit" class="btn btn-primary">Aceptar</button>
                               </div>

                           </form>
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

                <script src="./public/assets/popper.js/1.12.3/umd/popper.min.js"></script>
                <script src="./public/assets/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
                <script>

          /*      $(document).ready(function(){

           $('#modalAcceder').on('shown.bs.modal', function () {
             $('#inputEmail').val('');
             $('#inputPassword').val('');
           })*/

                /* $( "#formAcceder" ).submit(function(event) {
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

               });*/

               $('#formAcceder').submit(function(event) {
                      event.preventDefault();
                      //var email = $('#email').val();

                      grecaptcha.ready(function() {
                          grecaptcha.execute('6LdLk7EUAAAAAEWHuB2tabMmlxQ2-RRTLPHEGe9Y', {action: 'subscribe_newsletter'}).then(function(token) {
                              $('#formAcceder').prepend('<input type="hidden" name="token" value="' + token + '">');
                              $('#formAcceder').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');
                              $('#formAcceder').unbind('submit').submit();
                          });;
                      });
                });

                </script>
              </body>
              </html>
