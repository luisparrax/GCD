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

  <!-- crear tickets -->

  <br><br><br>
  <div  class="tab">
  <div class="col-md-10 mx-auto col-lg-5 pt-5 pt-md-7">
  <p class="text-center h3 bg-light text-dark rounded-3 "  style="--bs-bg-opacity: .5;">INSERTE TODOS LOS DATOS PARA CREAR TICKET</p>

    </div></div>
  <div id="CrearTickets" class="tab">
    <div class="col-md-10 mx-auto col-lg-5 pt-5 pt-md-7" >
      <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary needs-validation" id="formCrearTickets" method="POST" action="<?php echo $ruta; ?>insertarCaso/anadir" novalidate>
        <div class="form-floating mb-3">                                                                               
          
          <input type="text" name="nombre" id="nombre"  class="form-control"  placeholder="name@example.com" pattern="[A-Za-z ]+" required>
          <label for="nombre" class="form-label">nombre</label>    
          <div class="valid-feedback"></div>  
          <div class="invalid-feedback">Complete los Datos</div>     
    
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="correo" id="correo"  class="form-control"  placeholder="name@example.com" required>
          <label for="correo" class="form-label">Email</label>
          <!--<label for="email" class="form-label">Email</label>-->
          <div class="valid-feedback"></div>  
          <div class="invalid-feedback">Complete los Datos</div>
        </div>


        <div class="form-floating mb-3">
          <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="name@example.com" pattern="[0-9]{9}"  required>
          <label for="telefono" class="form-label">Telefono</label>
          <!--<label for="tel" class="form-label">Telefono</label>-->
          <div class="valid-feedback"></div>  
          <div class="invalid-feedback">Complete los Datos</div>
        </div>

       
        <div class="mb-3">
          <textarea class="form-control" name="sugerencia" id="sugerencia" placeholder="Sugerencia..." rows="3" required></textarea>
          <label for="sugerencia" class="form-label"></label>
          <!--<label for="validationTextarea" class="form-label"></label>-->
          <div class="valid-feedback"></div>  
          <div class="invalid-feedback">Inserte Sugerencia</div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
      </form>
    </div>
  </div><br><br>

  <!-- FIN crear tickets -->

</main>
<?php
  include "./vistas/inc/footer.php";
?>
</body>

<!-- fin cuerpo-->


