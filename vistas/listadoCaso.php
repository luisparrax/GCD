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
  
  <!-- listado tickets -->

  <br><br><br>
  <div id="CrearTickets" class="tab">
    <div class="col-md-10 mx-auto col-lg-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">correo</th>
          <th scope="col">telefono</th>
          <th scope="col">sugerencia</th>
        </tr>
      </thead>

      <tbody>
      <?php
      for($i=0; $i < count($data); $i++)
      {
        ?>
        <tr>
          <th scope="row"><?php echo $data[$i]["id"];?> </th>
          <td><?php echo $data[$i]["nombre"];?></td>
          <td><?php echo $data[$i]["correo"];?></td>
          <td><?php echo $data[$i]["telefono"];?></td>
          <td><?php echo $seg->limpiar($data[$i]["sugerencia"]);?></td>
        </tr>
      <?php
      }
    ?>
      </tbody>
</table>
    </div>
  </div><br><br>

  <!-- listado tickets -->

</main>
<?php
  include "./vistas/inc/footer.php";
?>
</body>

<!-- fin cuerpo-->


