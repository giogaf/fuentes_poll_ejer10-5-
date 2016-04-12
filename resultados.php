<?php
$edades =$_POST['edad'];
$sexos =$_POST['sexo'];
$calidad_servicio =$_POST['servicio'];

$menor25=0;
$mayor25=0;
$hombres=0;
$mujeres=0;
$excelente=0;
$bueno=0;
$regular=0;
$malo=0;

foreach ($edades as $edad) {
	if ($edad<25) {
		$menor25+=1;
	}
	else
	{
	 $mayor25+=1;
	}
}

foreach ($sexos as $sexo) {
	if ($sexo=='masculino') {
		$hombres+=1;
	}
	else
	{
	 $mujeres+=1;
	}
}
foreach ($calidad_servicio as $voto) {
	switch ($voto) {
		case '4':
			$excelente+=1;
			break;
		case '3':
			$bueno+=1;
			break;
		case '2':
			$regular+=1;
			break;
		case '1':
			$malo+=1;
			break;								
		default:
			# code...
			break;
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- ó CDN -->
	<script  src=""></script>
</head>
<body>
<div class="container">
	<div class="page-header">
        <h1>Resultados Encuesta</h1>
    </div>
	<div class="panel panel-primary">
        <div class="panel-heading">

          	<h3 class="panel-title">Rango Edades</h3>
        </div>
        <div class="panel-body">					
		<?php echo "Menores 25 años: ".$menor25."<br>";
		echo "Mayores: ".$mayor25."<br>";
		?>
        </div>
    </div>
	<div class="panel panel-primary">    
        <div class="panel-heading">
          	<h3 class="panel-title">Clasificación Sexo</h3>
        </div>
        <div class="panel-body">
		<?php
		echo "Hombres: ".$hombres."<br>";
		echo "Mujeres: ".$mujeres."<br>";
		?>
        </div>
    </div>         
	<div class="panel panel-primary">    
        <div class="panel-heading">
          	<h3 class="panel-title">Valoración Servicio</h3>
        </div>
        <div class="panel-body">			
		<?php
		echo "Excelente: ".$excelente."<br>";
		echo "Bueno: ".$bueno."<br>";
		echo "Regular: ".$regular."<br>";
		echo "Malo: ".$malo."<br>";		
		?>
        </div>
    </div>     
</div>    
<script  src="js/jquery.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>

