<?php
session_start();
include_once '../php4/config.php';

$inputTelefonoCelular = (isset($_REQUEST['inputTelefonoCelular'])&& $_REQUEST['inputTelefonoCelular']!=NULL)?$_REQUEST['inputTelefonoCelular']:'';
if($inputTelefonoCelular != ''){
  $sql = "UPDATE organismos
          SET telefono_Celular = '$inputTelefonoCelular'
          WHERE id_organismo_ao = '".$_SESSION['organismo_codigo']."'";
  $resultado=mysql_query($sql);
  if ($resultado) {
      $_SESSION['organismo_telefono_celular'] = $inputTelefonoCelular;
      echo $inputTelefonoCelular;
    }

};
