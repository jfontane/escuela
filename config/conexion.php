<?php
$DB_HOST="localhost";
$DB_NAME= "escuela_db";
$DB_USER= "root";
$DB_PASS= "";
	# conectare la base de datos
    $conex=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$conex){
        die("Imposible conectarse: ".mysqli_error($conex));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

?>
