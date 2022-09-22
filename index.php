<?php include('config/config.php'); ?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Secretaría de S. de Guanajuato.</title>
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
<header> 
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">Examen Desarrollo - Guanajuato.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  </nav>
</header>

<div class="container">
<?php
  require_once("controlador/captura.php");
?>
  <h3 class="mt-5" style="text-align:center;" id="titulo">Formulario para registrar consultas</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="medicos">Medico_id:</label>
      <input name="medicos" type="number" min="1" max="100" class="form-control" placeholder="Medico_id" required>
    </div>
    <div class="form-group col-md-6">
      <label for="pacientes">Paciente_id:</label>
      <input name="pacientes" type="number" type="number" min="1" max="100" class="form-control" id="pacientes" placeholder="Pacientes_id" required>
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="diagnostico">Diagnóstico_id</label>
      <input name="diagnostico" type="number" min="1" max="14444" class="form-control" id="diagnosticos" placeholder="diagnostico_id" required>
    </div>
  <div class="form-group col-md-6">
    <label for="Tratamiento">Tratamiento</label>
    <input name="tratamiento" type="text" class="form-control" id="tratamiento" placeholder="Tratamiento" required>
  </div>
  <!-- Trabajar la lista desplegable con php para mostrar datos-->
  <!--div class="form-group col-md-6">
    <label for="Tratamiento">Tratamiento</label>
    <select required name="tratamiento" class="form-control" id="Tratamiento">
    <option value=""><< >></option>
    <option value="valor1">Colombia</option>
    <option value="valor2">Argentina</option>
    </select>
  </div-->

</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="costos">Costo:</label>
      <input name="costo" type="text" class="form-control" id="costo" pattern="^[0-9]+([.][0-9]+)?$" placeholder="Costo" required>
    </div>
</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div>  
    <div class="col-12 col-md-12">

<h4 style="text-align:center;">Visualiza la información:</h4>

<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="thead-dark">
    <th width="17%">Fecha de Consultas</th>
    <th width="25%">Médicos</th>
    <th width="22%">Consultas Atendidas</th>
    <th width="25%">Costo Total de Consultas</th>
</thead>
<tbody>
<?php
require_once("controlador/listar.php");
?>
</tbody>
</table>
</div>
</form>
   </div>  
  </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Código para: <a href="#" target="_blank">Secretaría de S. Todos los derechos reservados (2022).</a></p>
    </span> </div>
</footer>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);

});
</script>
<script src="dist/js/bootstrap.min.js"></script> 
</body>
</html>