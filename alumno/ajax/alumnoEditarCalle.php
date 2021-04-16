<?php
session_start();
require_once('../../config/conexion.php');
require_once('../../lib/sanitize.class.php');
require_once('../../lib/arrayHash.class.php');

//Retornos de esta funcionalidad
// ok (sin errores)
// 1 (Error: Faltan parametros obligatorios o Incorrectos - Hash)
// 2 (Error: Hubo un error en la Consulta o en la BD)
// 3 (Error: El Email no es valido)

$response = array();

$calle = (isset($_POST['inputCalle']) && $_POST['inputCalle']!=NULL)?$_POST['inputCalle']:false;
$hash = isset($_POST['inputHash'])?SanitizeVars::STRING($_POST['inputHash']):false;
if($calle){
    if(!$hash || !ArrayHash::check($hash, array('dni'=>$_SESSION['dni']))){
      $response['estado'] = 1;
      $response['data'] = 'Faltan parametros obligatorios o son Incorrectos.';
    } else {
      $sql = "UPDATE persona SET domicilioCalle='".$calle."' WHERE dni='".$_SESSION['dni']."'";
      $resultado=mysqli_query($conex,$sql);
      if ($resultado) {
          $_SESSION['domicilioCalle'] = $calle;
          $response['estado'] = 100;
          $response['data'] = $calle;
      } else {
        $response['estado'] = 2;
        $response['data'] = 'Hubo un error en la BD.';
      };
    };
} else {
  $response['estado'] = 3;
  $response['data'] = 'La Calle es Invalida.';
};

echo json_encode($response);
