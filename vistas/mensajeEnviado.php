<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina Web Gestion Ciudadana Digital">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Gestion Ciudadana Digital</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?php echo $ruta ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $ruta ?>assets/css/visual.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  </head>
<body>

<?php
  include "./vistas/inc/header.php";
?>

<main>

  <div id="mensajeEnviado"  class="tab">
  <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5 pt-3 pt-md-5" >SUGERENCIA ENVIADA CORRECTAMENTE</h2>
    </div>
  </div>



  <div class="text-center mt-5">
      <!-- Botón para ir a la página insertarCaso -->
      <button onclick="location.href='<?php echo $ruta ?>retorno/irAInsertarCaso'" type="button" class="btn btn-primary me-5">Crear Nuevo Tickets</button>
      <!-- Botón para ir a la página revisarCaso -->
      <button onclick="location.href='<?php echo $ruta ?>retorno/irARevisarCaso'" type="button" class="btn btn-primary">Ir a Mis Tickets</button>
  </div>




  <div class="  pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" >
    <img src="<?php echo $ruta ?>assets/img/logoProyecto.avif  " class="img-thumbnail" alt="Logotipo de Gestión Ciudadana Digital" width="400" height="400">
  </div>

      
  </div>
 
</main>

<?php
  include "./vistas/inc/footer.php";
?>
</body>

<!-- fin cuerpo-->

