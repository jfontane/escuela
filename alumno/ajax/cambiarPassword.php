<?php
session_start();
include_once '../php4/config.php';

//echo $_POST['inputPassword'].'-'.$_POST['inputPassword2'];

if ($_POST['inputPassword'] != $_POST['inputPassword2']) {
   echo "No";
} else {
   $sql = "UPDATE user SET password = '".$_POST['inputPassword']."'
	         WHERE email = '".$_SESSION['usuario']."'";
   if (mysql_query($sql)) echo "Si";


};
