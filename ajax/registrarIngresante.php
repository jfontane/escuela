<?php
set_include_path("../lib/");

require_once('sanitize.class.php');

/*
apellido Varchar(45)
*/
$apellido = (isset($_POST['inputApellido']) && $_POST['inputApellido']!=NULL)?SanitizeVars::STRING_AND_SPACES($_POST['inputApellido']):false;

/*
nombre Varchar(45)
*/
$nombres = (isset($_POST['inputNombres']) && $_POST['inputNombres']!=NULL)?SanitizeVars::STRING_AND_SPACES($_POST['inputNombres']):false;

/*
dni Varchar(8)
*/
$dni = (isset($_POST['inputDni']) && $_POST['inputDni']!=NULL)?SanitizeVars::STRING_NUMBER($_POST['inputDni']):false;

/*
domicilioCalle Varchar(45)
*/
$domicilioCalle = (isset($_POST['inputDomicilio']) && $_POST['inputDomicilio']!=NULL)?SanitizeVars::STRING_NUMBER_AND_LETTERS($_POST['inputDomicilio']):false;

/*
domicilioNumero Varchar(45)
*/
$domicilioNumero = (isset($_POST['inputNumero'])&& $_POST['inputNumero']!=NULL)?SanitizeVars::INT($_POST['inputNumero']):false;

/*
domicilioDpto Varchar(45)
*/
$domicilioDpto = (isset($_POST['inputDpto'])&& $_POST['inputDpto']!=NULL)?SanitizeVars::STRING_NUMBER_AND_LETTERS($_POST['inputDpto']):false;

/*
telefono Varchar(45)
*/
$celular = (isset($_POST['inputCelular'])&& $_POST['inputCelular']!=NULL)?SanitizeVars::STRING_NUMBER($_POST['inputCelular']):false;

/*
email Varchar(45)
*/
$email = (isset($_POST['inputEmail'])&& $_POST['inputEmail']!=NULL)?SanitizeVars::EMAIL($_POST['inputEmail']):false;

/*
localidad Varchar(50)
*/
$localidad = (isset($_POST['inputLocalidad'])&& $_POST['inputLocalidad']!=NULL)?SanitizeVars::STRING_AND_SPACES($_POST['inputLocalidad']):false;

/*
observaciones Varchar(150)
*/
$observaciones = (isset($_POST['inputObservaciones'])&& $_POST['inputObservaciones']!=NULL)?SanitizeVars::HTML($_POST['inputObservaciones']):false;

/*
sexo Enum('F','M','O')
*/
$array_genero = array('F','M','O');
$sexo = (isset($_POST['inputGenero'])&& $_POST['inputGenero']!=NULL && in_array(strtoupper($_POST['inputGenero']), $array_genero))?$_POST['inputGenero']:false;

/*
nacionalidad Varchar(50)
*/
$nacionalidad = (isset($_POST['inputNacionalidad'])&& $_POST['inputNacionalidad']!=NULL)?SanitizeVars::STRING_AND_SPACES($_POST['inputNacionalidad']):false;

/*
fechaNacimiento Date
*/
$fechaNacimiento = (isset($_POST['inputFechaNacimiento'])&& $_POST['inputFechaNacimiento']!=NULL)?SanitizeVars::DATE($_POST['inputFechaNacimiento']):false;







 ?>
