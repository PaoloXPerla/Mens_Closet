<?php
class Menu{
    public static function SideBar($title){
        print('
    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>'.$title.'</title>

      <!-- Bootstrap core CSS -->
      <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="../../resources/css/simple-sidebar.css" rel="stylesheet">
      <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
      <link href="../../resources/css/estilo.css" rel="stylesheet">
      <link href="../../resources/css/all.min.css" rel="stylesheet">
      <script src="../../resources/js/Chart.bundle.js"></script>
      <script src="../../resources/js/utils.js"></script>
    </head>

    <body>

      <div class="d-flex position" id="wrapper">
        <!-- Sidebar -->
          <div class="bg-dark border-right" id="sidebar-wrapper">
              <div class="sidebar-heading" style="color:white">Usuario</div>
              <div class="list-group list-group-flush colorlist">
                <a href="#" class="list-group-item list-group-item-action bg-dark" style="color:white">Productos</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark" style="color:white">Categorias</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark" style="color:white">Usuarios</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark" style="color:white">Planillas</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark" style="color:white">Ventas</a>
              </div>
          </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div  class="position" id="page-content-wrapper">  
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom position">
            <button class="btn" id="menu-toggle"> Menu</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0"> 
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Configuracion
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" onclick="editarPerfil()" data-toogle="modal" data-target="#Perfil_Modal">Editar perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cerrar sesion</a>
                  </div> 
                </li>
              </ul>
            </div>
          </nav>
    <main>
      <div class="modal fade" id="Perfil_Modal" tabindex="-1" role="dialog" aria-labellebdy="Perfil_ModalTitulo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document"> 
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Perfil_ModalTituloLargo">
                Edita tu perfil:
              </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                  Probando el modal jsjsjs
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secundary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>
');

    }
}
?>