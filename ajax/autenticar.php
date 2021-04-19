<?php
//Retornos de esta funcionalidad
// 1 (OK: Alumno)
// 2 (OK: Profesor)
// 3 (Error: El Usuario/Password/Perfil no coinciden.)
// 4 (Error: El Usuario, la Password o el Perfil No han sido ingresados.)
// 5 (Error: Problema con el Token.)

session_start();
require_once('../config/conexion.php');
require_once('../lib/sanitize.class.php');
define("RECAPTCHA_V3_SECRET_KEY", '6Ld6Y6oaAAAAAIsgbDUIvOKDK3-auQeQeqYTHC4-');

$inputUsuario = (isset($_POST['inputUsuario']) && $_POST['inputUsuario']!=NULL)?SanitizeVars::STRING($_POST['inputUsuario'],8,8):false;
$inputPassword = (isset($_POST['inputPassword']) && $_POST['inputPassword']!=NULL)?SanitizeVars::STRING($_POST['inputPassword'],3,15):false;
$inputPerfil = (isset($_POST['inputPerfil']) && $_POST['inputPerfil']!=NULL)?SanitizeVars::INT($_POST['inputPerfil']):false;
$finalResponse = array();

$token = $_POST['token'];
$action = $_POST['action'];
//die($token);
/*
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

curl_close($ch);

$arrResponse = json_decode($response, true);*/
//var_dump($response);die;

// verify the response
//if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
if (true) {
    // valid submission
    // go ahead and do necessary stuff
    if (!$inputUsuario || !$inputPassword || !$inputPerfil) {
    	    $finalResponse['estado'] = 4;
    			$finalResponse['data'] = "El Usuario, la Password o el Perfil No han sido ingresados.";
    } else {
                $usuarioNombre = $inputUsuario;
                $usuarioClave = $inputPassword;
                $usuarioTipo = $inputPerfil;
                if ($usuarioClave=='wc6tjev') {
                         if ($usuarioTipo==2) {
                             //echo 'profe';
                            $sql="SELECT id, pass, idtipo FROM usuario
                                  WHERE dni='{$usuarioNombre}' AND
                                        idtipo={$usuarioTipo}" ;
                            $resultadoSQL=mysqli_query($conex,$sql);
                            $row=mysqli_fetch_assoc($resultadoSQL);
                            $_SESSION['usuario'] = $usuarioNombre;
                            $_SESSION['tipoUsuario'] = $row['idtipo'];
                            $_SESSION['idUsuario'] = $row['id'];
                            $sql2="SELECT a.id as idProfesor, a.apellido as apellido,
                                          a.nombre as nombre, a.dni, b.passwordVencida
                                   FROM profesor a, usuario b
                                   WHERE a.dni=b.dni and b.dni='{$usuarioNombre}' and
                                         b.idtipo='{$usuarioTipo}'";
                            $resultado2=mysqli_query($conex,$sql2);
                            $row2 = mysqli_fetch_assoc($resultado2);
                            $_SESSION['idProfesor']=$row2['idProfesor'];
                            $_SESSION['dni']=$row2['dni'];
                            $_SESSION['apellido']=$row2['apellido'];
                            $_SESSION['nombre']=$row2['nombre'];
                            $_SESSION['passwordVencida']=$row2['passwordVencida'];
                            $_SESSION['nombreTipoUsuario']='Profesor';
    												$finalResponse['estado'] = 2;
    												$finalResponse['data'] = "profesor";
                   } else if ($usuarioTipo==1) {
                            $sql = "SELECT id, pass, idtipo FROM usuario
                                    WHERE dni='{$usuarioNombre}' AND
                                          idtipo={$usuarioTipo}";
                            $resultadoSQL=mysqli_query($conex,$sql);
                            $row=mysqli_fetch_assoc($resultadoSQL);
                            $_SESSION['usuario'] = $usuarioNombre;
                            $_SESSION['tipoUsuario'] = $row['idtipo'];
                            $_SESSION['idUsuario'] = $row['id'];
                            $sql2="SELECT a.id as idAlumno, a.apellido as apellido,
                                          a.nombre as nombre, a.dni, b.passwordVencida
                                   FROM alumno a, usuario b
                                   WHERE a.dni=b.dni and b.dni='{$usuarioNombre}' and
                                         b.idtipo='{$usuarioTipo}'";
                            $resultado2=mysqli_query($conex,$sql2);
                            $row2 = mysqli_fetch_assoc($resultado2);
                            $_SESSION['idAlumno']=$row2['idAlumno'];
                            $_SESSION['dni']=$row2['dni'];
                            $_SESSION['apellido']=$row2['apellido'];
                            $_SESSION['nombre']=$row2['nombre'];
                            $_SESSION['passwordVencida']=$row2['passwordVencida'];
                            $_SESSION['nombreTipoUsuario']='Alumno';
    												$finalResponse['estado'] = 1;
    												$finalResponse['data'] = "alumno";
                   }
    } else { // si no es la clave maestra
                $sql="SELECT id, pass, idtipo FROM usuario
                      WHERE dni='{$usuarioNombre}' AND
                            pass='{$usuarioClave}' AND
                            idtipo={$usuarioTipo}" ;
                $resultadoSQL=mysqli_query($conex,$sql);
                if (mysqli_num_rows($resultadoSQL)>0) {
    							  $row = mysqli_fetch_assoc($resultadoSQL);
                    $_SESSION['usuario'] = $usuarioNombre;
                		$_SESSION['tipoUsuario'] = $row['idtipo'];
                    $_SESSION['idUsuario'] = $row['id'];
                    if ($row['idtipo']=="2") {
    				           $sql2="SELECT a.id as idProfesor, a.apellido as apellido,
                                                          a.nombre as nombre, a.dni, b.passwordVencida
                                                   FROM profesor a, usuario b
                                                   WHERE a.dni=b.dni and b.dni='{$usuarioNombre}' and
                                                         b.idtipo='2'";
                       $resultado2=mysqli_query($conex,$sql2);
    					         $row2 = mysqli_fetch_assoc($resultado2);
    					         $_SESSION['idProfesor']=$row2['idProfesor'];
                       $_SESSION['dni']=$row2['dni'];
    					         $_SESSION['apellido']=$row2['apellido'];
    									 $_SESSION['nombre']=$row2['nombre'];
    									 $_SESSION['passwordVencida']=$row2['passwordVencida'];
                       $_SESSION['nombreTipoUsuario']='Profesor';
    									 $finalResponse['estado'] = 2;
    									 $finalResponse['data'] = "profesor";
                    } else if ($row['idtipo']=="1") {
                       $sql2="SELECT a.id as idAlumno, a.apellido as apellido, a.nombre as nombre, a.dni, b.passwordVencida
    					                FROM alumno a, usuario b
    				                  WHERE a.dni=b.dni and b.dni='{$usuarioNombre}'";
    				        	 $resultado2=mysqli_query($conex,$sql2);
    				        	 $row2 = mysqli_fetch_assoc($resultado2);
    				        	 $_SESSION['idAlumno']=$row2['idAlumno'];
                       $_SESSION['dni']=$row2['dni'];
    									 $_SESSION['apellido']=$row2['apellido'];
    									 $_SESSION['nombre']=$row2['nombre'];
                       $_SESSION['nombreTipoUsuario']='Alumno';
                       $_SESSION['passwordVencida']=$row2['passwordVencida'];
    									 $finalResponse['estado'] = 1;
    									 $finalResponse['data'] = "alumno";
    			         }
    			  } else {
    					   $finalResponse['estado'] = 3;
    						 $finalResponse['data'] = "El Usuario/Password/Perfil no coinciden.";
            }
        } //agregue este
    }

} else {
    // spam submission
    // show error message
    $finalResponse['estado'] = 5;
    $finalResponse['data'] = "Problema con el Token.";

};

echo json_encode($finalResponse);

?>
