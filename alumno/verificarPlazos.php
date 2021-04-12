<?php

function habilitarOpcionCrearEliminarInscripcion() {
        if (!empty($_SESSION['arrayTurnoActivo'])) {
                        $fechaActual=date('Y-m-d');
                        if((strtotime($fechaActual) < strtotime($_SESSION['arrayTurnoActivo']['fechaInicioEvento'])) ||
                          (strtotime($fechaActual) > strtotime($_SESSION['arrayTurnoActivo']['fechaFinalizacionEvento']))) {
                            return false;
                        } else return true;
             } else {
                 return false;
             };
}


function habilitarOpcionCrearEliminarInscripcionCursado() {
//        if (!empty($_SESSION['arrayTurnoActivo'])) {
//                        $fechaActual=date('Y-m-d');
//                        if((strtotime($fechaActual) < strtotime($_SESSION['arrayTurnoActivo']['fechaInicioEvento'])) ||
//                          (strtotime($fechaActual) > strtotime($_SESSION['arrayTurnoActivo']['fechaFinalizacionEvento']))) {
//                            return false;
//                        } else return true;
//             } else {
//                 return false;
//             };
    return false;
}

function habilitarBotonImprimirInscripcion() {
   if (!empty($_SESSION['arrayTurnoExamen'])) {
      $fechaActual=date('Y-m-d');
      if ((strtotime($fechaActual) > strtotime($_SESSION['arrayTurnoActivo']['fechaFinalizacionEvento'])) &&
          (strtotime($fechaActual) <= strtotime($_SESSION['arrayTurnoExamen']['fechaFinalizacionEvento']))) {
              return TRUE;
      } else return FALSE;
    } else {
       return FALSE;
    };
};


function habilitarOpcionConsultarInscripcion() {
  if (!empty($_SESSION['arrayTurnoExamen'])) {
     $fechaActual=date('Y-m-d');
     if ((strtotime($fechaActual) > strtotime($_SESSION['arrayTurnoActivo']['fechaInicioEvento'])) &&
         (strtotime($fechaActual) <= strtotime($_SESSION['arrayTurnoExamen']['fechaFinalizacionEvento']))) {
             return TRUE;
     } else return FALSE;
   } else {
      return FALSE;
   };
}


function fueraPlazoInscripciones() {
   if (!empty($_SESSION['arrayTurnoActivo'])) {
                        $fechaActual=date('Y-m-d');
                        if((strtotime($fechaActual) < strtotime($_SESSION['arrayTurnoActivo']['fechaInicioEvento'])) ||
                          (strtotime($fechaActual) > strtotime($_SESSION['arrayTurnoActivo']['fechaFinalizacionEvento']))) {
                            return true;
                        } else return false;
             } else {
                 return true;
             };

}
