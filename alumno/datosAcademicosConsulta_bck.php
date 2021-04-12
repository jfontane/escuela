<?php
require_once('./controlAcceso.php');
require_once('./optionsCarrerasDelAlumno.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Escuela 40 - Sistema de Inscripciones</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/switcher.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript" src="ajxAlumno.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>

</head>
<body>
<div id="main">
  <!-- Tray -->
  <div id="tray" class="box">
    <p class="f-left box">
      <!-- Switcher -->
      <span class="f-left" id="switcher"> <a href="javascript:void(0);" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a> <a href="javascript:void(0)" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="" /></a> </span> Sistema de Gestion de Alumnos: <strong>Subsistema Inscripcion a Examenes</strong> </p>
    <p class="f-right">Usuario: <strong><a href="#"><?php echo $_SESSION['dni'];?></a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="./logout.php" id="logout">Salir</a></strong></p>
  </div>
  <!--  /tray -->
  <hr class="noscreen" />
  <!-- Menu -->
  <div id="menu" class="box">
    <ul class="box f-right">
     <li><a href="http://ens40.sfe.infd.edu.ar/aula/acceso.cgi?id_curso=" target="_blank"><span><strong>Ir Campus Virtual</strong></span></a></li>
    </ul>
    <ul class="box">
      <li><a href="./menuEscritorio.php"><span>Escritorio</span></a></li>
      <li><a href="./menuConfiguracion.php"><span>Configuracion</span></a></li>
      <!-- Active -->
      <li id="menu-active"><a href="./menuDatosAcademicos.php"><span>Datos Academicos</span></a></li>
      <li><a href="./menuExamenes.php"><span>Examenes</span></a></li> 
     </ul>
  </div>
  
  <!-- /header -->
  <hr class="noscreen" />
  <!-- Columns -->
  <div id="cols" class="box">
    <!-- Aside (Left Column) -->
    <div id="aside" class="box">
      <div class="padding box">
        <!-- Logo (Max. width = 200px) -->
        <p id="logo"><a href="#"><img src="img/logo.png" alt=""/></a></p>
               
      </div>
      <!-- /padding -->
      <ul class="box">
          <li id="submenu-active"><a href="./menuDatosAcademicos.php">Datos Academicos</a></li>  
        <li><a href="#">Consulta de Datos</a></li>
      </ul>
    </div>
    <!-- /aside -->
    <hr class="noscreen" />
    <!-- Content (Right Column) -->
    <div id="content" class="box">
      <h1>Bienvenidos al sistema de Inscripcion a Examenes</h1>
      <!-- Headings -->
      <h2>DATOS ACADEMICOS</h2>
       <!-- Form -->
       <h3 class="tit">Consulta de Datos</h3>
      <fieldset>
      <legend>Por Carrera</legend>
      <form method="POST" action="" enctype="multipart/form-data">
          <select id='selectCarreras' name='selectCarreras' onchange='cargarHistorial(this.id)'>
        <?php 
               echo crearOptions();
         ?>
      </select>  
          <table style="width:650px;border: 0px ">
      
    <tr style="border: 0px "><td style="border: 0px ">&nbsp;</td></tr>       
    <tr style="border: 0px "><td style="border: 0px "><div id='divContenido'></div></td></tr>           
    
        </table>
        </form>
        
      
            </fieldset>
      
    </div>
    <!-- /content -->
  </div>
  <!-- /cols -->
  <hr class="noscreen" />
  <!-- Footer -->
  <?php
include_once('footer.php');
?>
  <!-- /footer -->
</div>
<!-- /main -->
</body>
</html>