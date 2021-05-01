<?php
session_start();
session_destroy();
 ?>

<!doctype html>
<html lang="es">
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6Ld6Y6oaAAAAAMqMNwMcdEBjkJugmHZ6Nu6Cpc5T"></script>
</head>


<body>

  <?php include_once('navBar.php') ?>

  <main role="main" class="container">
    <div class="row row-top">

      <div class="col-xs-12">

<img src="./public/img/escuela_50_anios.png" alt="">

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

</body>
</html>
