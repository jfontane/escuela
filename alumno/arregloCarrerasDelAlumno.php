<?php
        function generaArregloCarreras($conex) {
           $sqlAlumnoCarrera="select b.id, b.descripcion 
                              from alumno_estudia_carrera a, carrera b
                              where a.idAlumno={$_SESSION['idAlumno']} and 
                                    a.idCarrera=b.id";
           //echo $sqlAlumnoCarrera;
           $resultadoSqlAlumnoCarrera=  mysqli_query($conex, $sqlAlumnoCarrera);
           
           $_SESSION['ARRAY_CARRERAS']=array();
           while ($filaAlumnoCarrera=  mysqli_fetch_assoc($resultadoSqlAlumnoCarrera)) {
               $arregloCarreras=array();
               $arregloCarreras['id']=$filaAlumnoCarrera['id'];
               $arregloCarreras['nombre']=$filaAlumnoCarrera['descripcion'];
               array_push($_SESSION['ARRAY_CARRERAS'],$arregloCarreras);
               
           };
           
           //var_dump($_SESSION['ARRAY_CARRERAS']);
        };
        
generaArregloCarreras($conex);      

?>