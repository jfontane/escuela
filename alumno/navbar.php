<?php
if ($id_url=='menu_escritorio') {
  $item_menu_escritorio = 'active';
} else {
  $item_menu_escritorio = '';
};

if ($id_url=='historia_academica') {
  $item_historia_academica = 'active';
} else {
  $item_historia_academica = '';
};


 ?>
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <a class="navbar-brand" href="#"><img
      src="../public/img/logo.png" width="100"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?=$item_menu_escritorio?>">
          <a class="nav-link" href="menuEscritorio.php"><i class="material-icons">home</i><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?=$item_historia_academica?>">
          <a class="nav-link" href="historiaAcademica.php">Historia Academica<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Examenes<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAcceder">Institucional<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAcceder">Campus Virtual<span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <span style="display:none">
      <form class="form-inline mt-2 mt-md-0 custom-margin-right">
                          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      </span>


                      <ul class="list-inline custom-icon-middle">
                        <!--  <li class="list-inline-item dropdown">

                              <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"
                                 aria-haspopup="true"
                                 aria-expanded="false" title="Notificaciones"><i class="material-icons">info</i></a>

                              <div class="dropdown-menu custom-dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="#">Notificacion 1</a>
                                  <a class="dropdown-item" href="#">Notificacion 2</a>
                                  <a class="dropdown-item" href="#">Otras notificaciones</a>
                              </div>

                          </li> -->

                          <li class="list-inline-item">

                              <a href="#" class="dropdown-toggle" id="dropdownMenuLinkPerson" data-toggle="dropdown"
                                 aria-haspopup="true"
                                 aria-expanded="false" title="Usuario logeado"><i class="material-icons">person</i></a>

                              <div class="dropdown-menu custom-dropdown-menu-right" aria-labelledby="dropdownMenuLinkPerson">
                                  <a class="dropdown-item" href="cambiarPassword.php">Cambiar Contraseña</a>
                                  <a class="dropdown-item" href="#">Datos Personales</a>
                                  <!-- <a class="dropdown-item" href="#">Configuración</a>
                                  <a class="dropdown-item" href="#">Acerca de</a> -->
                              </div>

                          </li>

                          <li class="list-inline-item"><a href="./logout.php" title="Salir"><i class="material-icons">exit_to_app</i></a>
                          </li>

                      </ul>


    </div>
  </nav>
