<?php
session_start();

        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
	if(empty($_POST['inputUsuario']) || empty($_POST['inputPassword'])) {
            echo "El usuario o la contrase&ntilde;a no han sido ingresados";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<a class='button' href='javascript:history.back();'>Volver a Ingresar al Sistema</a>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
            $usuarioNombre=$_POST['inputUsuario'];
            $usuarioClave =$_POST['inputPassword'];
            $usuarioTipo  =$_POST['inputPerfil'];
            //echo $usuarioClave.'-'.$usuarioNombre.'-'.$usuarioTipo;die;
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            require_once('../config/conexion.php');
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
                        //header("Location: profesor/menuEscritorio.php");
                        echo "2";
               } else if ($usuarioTipo==1) {
                   //echo "alumnooo";
                   $sql="SELECT id, pass, idtipo FROM usuario
                              WHERE dni='{$usuarioNombre}' AND
                                idtipo={$usuarioTipo}" ;
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
                        //header("Location: alumno/menuEscritorio.php");
                        echo "1";

               }

            } else {

            $sql="SELECT id, pass, idtipo FROM usuario
                  WHERE dni='{$usuarioNombre}' AND
                        pass='{$usuarioClave}' AND
                        idtipo={$usuarioTipo}" ;
            $resultadoSQL=mysqli_query($conex,$sql);
            if ($row=mysqli_fetch_assoc($resultadoSQL)) {
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
                                        //header("Location: profesor/menuEscritorio.php");
                                        echo "2";

                                               }
		else if ($row['idtipo']=="1") {
                                        $sql2="SELECT a.id as idAlumno, a.apellido as apellido, a.nombre as nombre, a.dni,
                                                      b.passwordVencida
					       FROM alumno a, usuario b
				               WHERE a.dni=b.dni and b.dni='{$usuarioNombre}'";
                                        //echo "<!-- ".$sql2." -->";
				        $resultado2=mysqli_query($conex,$sql2);
				        $row2 = mysqli_fetch_assoc($resultado2);
				        $_SESSION['idAlumno']=$row2['idAlumno'];
                                        $_SESSION['dni']=$row2['dni'];
					$_SESSION['apellido']=$row2['apellido'];
					$_SESSION['nombre']=$row2['nombre'];
                                        $_SESSION['nombreTipoUsuario']='Alumno';
                                        $_SESSION['passwordVencida']=$row2['passwordVencida'];
                                        //if ($_SESSION['passwordVencida']=='N')
                                        //if ($_SESSION['passwordVencida']=='N')
                                        //header("Location: alumno/menuEscritorio.php");
                                        echo "1";
				        //else header("Location: alumno/formCambiarPassword.php");


			     }
			  }
                else {
                         echo "3";
                }
          } //agregue este
        }
//ob_flush();
