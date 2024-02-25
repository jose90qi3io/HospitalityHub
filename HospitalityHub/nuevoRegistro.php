<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="http://localhost:8080/HospitalityHub/css/styles_Nuevoregistro.css">
    <title>Document</title>
</head>
<body>
<?php include("./componentes/navBar.php"); ?>
    <h1 class="titulos"> NUEVO REGISTRO</h1>
    <!-- Boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Forms -->
    <div class="conteiner">
    <form class="row g-3 needs-validation container-md" novalidate>
        <h5> INFORMACION PERSONAL</h5>
        <hr>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationTooltip01" required>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationTooltip02" required>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltipUsername" class="form-label">Edad</label>
    <div class="input-group has-validation">
      <input type="number" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip03" class="form-label">Fecha de ingreso</label>
    <input type="date" class="form-control" id="validationTooltip03" required>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip03" class="form-label">Fecha de salida</label>
    <input type="date" class="form-control" id="validationTooltip03" required>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltipUsername" class="form-label">Numero de Huspedes</label>
    <div class="input-group has-validation">
      <input type="number" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <h5> HABITACIONES</h5>
        <hr>
  <div class="col-md-9 position-relative">
    <label for="validationTooltip04" class="form-label">Tipo de habiacion</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">.....</option>
      <option>Sencilla</option>
      <option>Doble</option>
      <option>Grande</option>
    </select>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">Habitaciones disponibles</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">.....</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
  </div>  <div class="col-md-8 position-relative">
    <label for="validationTooltip01" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="validationTooltip01" required>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip01" class="form-label">No. maximo de personas</label>
    <input type="text" class="form-control" id="validationTooltip01" required>
  </div>
  <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" id="bnt_r" >Registrar</button>
  <button class="btn btn-danger" id="bnt_r" >Cancelar</button>
</div>
</form>

    </div>
    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>