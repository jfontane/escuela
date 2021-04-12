<?php
session_start();
if (isset($_SESSION['tipoUsuario'])) {
        if (($_SESSION['tipoUsuario']!='1')||(!$_SESSION['tipoUsuario'])) {
            session_destroy();
            header('location: http://www.escuela40.net');
        }
        require_once('../config/conexion.php');
} else {
          session_destroy();
          header('location: http://www.escuela40.net');
          }
?>
