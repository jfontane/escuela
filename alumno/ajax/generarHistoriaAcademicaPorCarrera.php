<?php
require_once('../config/conexion.php');
require_once('./controlAcceso.php');

$idCarrera=base64_decode($_POST['idCarrera']);

$arrayMateriasAprobadasPorCarrera=array();
$sqlMateriasAprobadas="SELECT b.id as idCarrera, b.descripcion as nombreCarrera,
                              d.id as idMateria, d.nombre as nombreMateria, a.nota, a.fechaModificacionNota
                        FROM alumno_rinde_materia a, carrera b, carrera_tiene_materia c,materia d
                        WHERE a.idMateria=c.idMateria and c.idCarrera=b.id and c.idMateria=d.id and
                              a.idAlumno={$_SESSION['idAlumno']} and
                              a.estado_final='Aprobo' and b.id={$idCarrera}";

//echo $sqlMateriasAprobadas;
$resultado=mysqli_query($conex,$sqlMateriasAprobadas);

if (mysqli_num_rows($resultado)>0) {


while ($fila=mysqli_fetch_assoc($resultado)) {
    $arrayMateriaAprobada=array();
     array_push($arrayMateriaAprobada, $fila['idCarrera'],$fila['nombreCarrera'],$fila['idMateria'],$fila['nombreMateria'],$fila['nota'],$fila['fechaModificacionNota']);
     array_push($arrayMateriasAprobadasPorCarrera,$arrayMateriaAprobada);
}
//var_dump($arrayMateriasAprobadasPorCarrera);
echo "<br>";
//$_SESSION['MateriasAprobadasTodasCarreras']=$arrayMateriasAprobadasTodasCarreras;

$arrayMateriasRegularesPorCarrera=array();
$sqlMateriasRegulares ="SELECT b.id as idCarrera, b.descripcion as nombreCarrera,
                              d.id as idMateria, d.nombre as nombreMateria, a.nota, a.anioCursado
                        FROM alumno_cursa_materia a, carrera b, carrera_tiene_materia c,materia d
                        WHERE a.idMateria=c.idMateria and c.idCarrera=b.id and c.idMateria=d.id and
                              a.idAlumno={$_SESSION['idAlumno']} and
                              (a.estado_final='Regularizo' or a.estado_final='Promociono') and b.id={$idCarrera}";
$resultado=mysqli_query($conex,$sqlMateriasRegulares);
while ($fila=mysqli_fetch_assoc($resultado)) {
    $arrayMateriaRegular=array();
     array_push($arrayMateriaRegular, $fila['idCarrera'],$fila['nombreCarrera'],$fila['idMateria'],$fila['nombreMateria'],$fila['nota'],$fila['anioCursado']);
     array_push($arrayMateriasRegularesPorCarrera,$arrayMateriaRegular);
}
//var_dump($arrayMateriasRegularesPorCarrera);

//
//
////==================================================================================================
$sqlMateriasPorCarrera="SELECT d.id, d.nombre, d.anio
                       FROM carrera_tiene_materia c,materia d
                       WHERE c.idMateria=d.id and
                             c.idCarrera={$idCarrera}
                             order by d.anio, c.ordenCarga";
$resultadoMateriasPorCarrera=mysqli_query($conex,$sqlMateriasPorCarrera);
$arraytodasMateriaPorCarrera=array();
$notaRegularidad=0;$notaFinal=0;$fechaFinal=0;
$anioRegularidad=0;
while ($filaMateriasPorCarrera=mysqli_fetch_assoc($resultadoMateriasPorCarrera)) {
    $arrayMateriaPorCarrera=array();
    //(idMateria, nombreMateria, notaRegularidad, anioRegularidad, NotaFinal, FechaFinal)
    foreach  ($arrayMateriasRegularesPorCarrera as $valor) {
        if ($valor[2]==$filaMateriasPorCarrera['id']) {
            $notaRegularidad=$valor[4];
            $anioRegularidad=$valor[5];
            break;
        } else {
            $notaRegularidad=0;
            $anioRegularidad=0;
        }

       }

       foreach  ($arrayMateriasAprobadasPorCarrera as $valor1) {
               if ($valor1[2]==$filaMateriasPorCarrera['id']) {
                   $notaFinal=$valor1[4];
                   $fechaFinal=substr($valor1[5],0,10);

                   break;
               } else {
                   $notaFinal=0;
                   $fechaFinal=0;
               }
            }
        array_push($arrayMateriaPorCarrera,$filaMateriasPorCarrera['id'],$filaMateriasPorCarrera['nombre'],$notaRegularidad,$anioRegularidad,$notaFinal,$fechaFinal,$filaMateriasPorCarrera['anio']);
        array_push($arraytodasMateriaPorCarrera,$arrayMateriaPorCarrera);

    }
   // var_dump($arraytodasMateriaPorCarrera);die;

     echo "<div class='table-responsive text-left'> <table class='table table-responsive table-sm table-striped table-hover'>";
$band=true;
foreach ($arraytodasMateriaPorCarrera as $valor) {
    if ($valor[6]==1 && $band) {
          echo "<tr><th colspan=5 style='text-align: center;background-color: #D8F367;'>Primer A&ntilde;o</th></tr>";
          echo "<tr><th style='text-align: center;'></th>"
       . "<th style='text-align: center;' colspan='2'>CURSADO</th>"
       . "<th style='text-align: center;' colspan='2'>EXAMEN FINAL</th></tr>";
            echo "<tr><th style='text-align: center;'>Asignatura</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>A&ntilde;o</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>Fecha</th></tr>";
          $band=false;
    } else
    if ($valor[6]==2 && !$band) {
          echo "<tr><th colspan=5 style='text-align: center;background-color: #85CE65;' >Segundo A&ntilde;o</th></tr>";
          echo "<tr><th style='text-align: center;'></th>"
       . "<th style='text-align: center;' colspan='2'>CURSADO</th>"
       . "<th style='text-align: center;' colspan='2'>EXAMEN FINAL</th></tr>";
            echo "<tr><th style='text-align: center;'>Asignatura</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>A&ntilde;o</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>Fecha</th></tr>";
          $band=true;
    } else
    if ($valor[6]==3 && $band) {
          echo "<tr><th colspan=5 style='text-align: center;background-color: #659ECE;' >Tercer A&ntilde;o</th></tr>";
          echo "<tr><th style='text-align: center;'></th>"
       . "<th style='text-align: center;' colspan='2'>CURSADO</th>"
       . "<th style='text-align: center;' colspan='2'>EXAMEN FINAL</th></tr>";
            echo "<tr><th style='text-align: center;'>Asignatura</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>A&ntilde;o</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>Fecha</th></tr>";
          $band=false;
    } else
    if ($valor[6]==4 && !$band) {
          echo "<tr><th colspan=5 style='text-align: center;background-color: #F16F8E;' >Cuarto A&ntilde;o</th></tr>";
          echo "<tr><th style='text-align: center;'></th>"
       . "<th style='text-align: center;' colspan='2'>CURSADO</th>"
       . "<th style='text-align: center;' colspan='2'>EXAMEN FINAL</th></tr>";
            echo "<tr><th style='text-align: center;'>Asignatura</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>A&ntilde;o</th>"
       . "<th style='text-align: center;'>Nota</th>"
       . "<th style='text-align: center;'>Fecha</th></tr>";
          $band=true;
    }
	if ($valor[2]>=0 && $valor[2]<=10)
     echo "<tr id='tr_{$valor[0]}' onmouseover=\"cambiar_color_over(this)\" onmouseout=\"cambiar_color_out(this)\"><td>".utf8_encode($valor[1])."</td><td style='text-align: center;'>$valor[2]</td><td style='text-align: center;'>$valor[3]</td><td style='text-align: center;'>$valor[4]</td><td style='text-align: center;'>$valor[5]</td></tr>";
    else if ($valor[2]==-2) echo "<tr id='tr_{$valor[0]}' onmouseover=\"cambiar_color_over(this)\" onmouseout=\"cambiar_color_out(this)\"><td>".utf8_encode($valor[1])."</td><td style='text-align: center;'>Posib.Prom.</td><td style='text-align: center;'>$valor[3]</td><td style='text-align: center;'>$valor[4]</td><td style='text-align: center;'>$valor[5]</td></tr>";

}
echo "</table></div>";
} else {
  echo "<div class='table-responsive'> <table class='table table-sm table-striped'>";
  echo "<tr><th>No Existen Resultados.</th></tr>";
  echo "</table></div>";
};

?>
