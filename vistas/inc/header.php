  <header>

<nav class="navbar navbar-expand-md bg-dark fixed-top border-bottom" data-bs-theme="dark">
  <div class="container ">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> Menú
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Menú</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between text-center">
          
          <li class="tablinks" onclick="openTab(event, 'Inicio')"><a class="nav-link" href="<?php echo $ruta; ?>index" aria-label="Enlace de ejemplo">INICIO</a></li>
            <li class="tablinks" onclick="openTab(event, 'CrearTickets')"><a class="nav-link" href="<?php echo $ruta; ?>insertarCaso/mostrar " aria-label="Enlace de ejemplo">CREAR TICKETS</a>
            </li>
            <li class="tablinks" onclick="openTab(event, 'MisTickets')"><a class="nav-link" href="<?php echo $ruta; ?>listadoCaso/mostrar" aria-label="Enlace de ejemplo">MIS TICKETS</a>
            </li>
            <li class="tablinks" onclick="openTab(event, 'Contacto')"><a class="nav-link" href="<?php echo $ruta; ?>contacto/mostrar" aria-label="Enlace de ejemplo">CONTACTOS</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>

