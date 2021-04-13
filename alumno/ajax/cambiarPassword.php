<?php
require_once('../config/conexion.php');
require_once('./controlAcceso.php');

//echo $_POST['inputPassword'].'-'.$_POST['inputPassword2'];

$password = isset($_POST['inputPassword'])?$_POST['inputPassword']:false;
$password2 = isset($_POST['inputPassword2'])?$_POST['inputPassword2']:false;

if (!$password || !$password2) {
       echo 1;
} else {
    if ($password != $password2) {
       echo 2;
    } else {
       $sql = "UPDATE usuario SET pass = '".$password."'
    	         WHERE dni = ".$_SESSION['usuario'];
       if (mysqli_query($conex,$sql)) echo 100;
       else echo 3;
    }
}

?>
