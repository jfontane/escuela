<?php
        function crearOptions() {
            $opciones="<option value='".base64_encode(0)."' selected='selected'> Seleccion Carrera </option>";
            foreach ($_SESSION['ARRAY_CARRERAS'] as $valor) {
                $opcion="<option value='".base64_encode($valor['id'])."'>{$valor['nombre']}</option>"; 
               $opciones=$opciones.$opcion;
            };
          
            return $opciones;
        };
        

?>