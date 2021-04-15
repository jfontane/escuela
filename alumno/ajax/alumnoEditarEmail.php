<?php
session_start();
include_once '../php4/config.php';

$email = (isset($_REQUEST['inputEmail'])&& $_REQUEST['inputEmail']!=NULL)?$_REQUEST['inputEmail']:'';
if($email != ''){
  $sql = "UPDATE organismos
          SET email = '$email'
          WHERE id_organismo_ao = '".$_SESSION['organismo_codigo']."'";
  $resultado=mysql_query($sql);
  if ($resultado) {
      $_SESSION['organismo_email'] = $email;
      echo $email;
    }

};
