<?php
session_start();
require_once('../../config/conexion.php');
require_once('../../lib/sanitize.class.php');
require_once('../../lib/arrayHash.class.php');

//Retornos de esta funcionalidad
// 100 (sin errores)
// 1 (Error: Faltan parametros obligatorios o Incorrectos - Hash)
// 2 (Error: Hubo un error en la Consulta o en la BD)
// 3 (Error: El Email no es valido)

$response = array();

$email = (isset($_POST['inputEmail']) && $_POST['inputEmail']!=NULL)?(SanitizeVars::EMAIL($_POST['inputEmail'])):false;
$hash = isset($_POST['inputHash'])?SanitizeVars::STRING($_POST['inputHash']):false;

//$hash = 'clave_vulnerada_por_un_hacker';

if($email){
    if(!$hash || !ArrayHash::check($hash, array('dni'=>$_SESSION['dni']))){
      $response['estado'] = 1;
      $response['data'] = 'Faltan parametros obligatorios o son Incorrectos.';
    } else {
      $sql = "UPDATE personaa SET email='".$email."' WHERE dni='".$_SESSION['dni']."'";
      $resultado=mysqli_query($conex,$sql);
      if ($resultado) {
            $_SESSION['email'] = $email;
            $response['estado'] = 100;
            $response['data'] = $email;
      } else {
            $response['estado'] = 2;
            $response['data'] = 'Hubo un error en la BD.';
      };
    };
} else {
    $response['estado'] = 3;
    $response['data'] = 'El Email es Invalido.';
};

echo json_encode($response);
