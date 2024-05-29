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

  <!-- Mis tickets -->
  <br><br><br>
  <div  class="tab">
  <div class="col-md-10 mx-auto col-lg-5 pt-5 pt-md-7">
  <p class="text-center h3 bg-light text-dark rounded-3 "  style="--bs-bg-opacity: .5;">INSERTE EL NUMERO DE TELEFONO DEL TICKET CREADO</p>

    </div></div>
  
  <div id="MisTickets" class="tab">
    <div class="col-md-10 mx-auto col-lg-5 pt-5 pt-md-7">
      <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary needs-validation" id="formMisTickets" method="POST" action="<?php echo $ruta; ?>listadoCaso/listar"  novalidate>
          <?php
            
            if(isset($data["errorvalidacion"]))
            {
              ?>
                <div class="alert alert-danger">
                <?php echo $data["errorvalidacion"];?>
                </div>
              <?php
            }
          ?>
        
        <div class="form-floating mb-3">
            <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="name@example.com" pattern="[0-9]{9}"  required>
            <label for="telefono" class="form-label">Telefono</label>
            <!-- <label for="tel" class="form-label">Telefono</label> -->
            <div class="valid-feedback"></div>  
            <div class="invalid-feedback">Complete los Datos</div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button><br><br>
              
      </form>
    </div>
  </div>

<!-- FIN Mis tickets -->
 
</main>
<?php
include "./vistas/inc/footer.php";
?>

</body>

<!-- fin cuerpo-->

