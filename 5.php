<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- ó CDN -->
	
</head>
<body>
<div class="container">	
	<div class="page-header">
        <h1>Responder Encuesta</h1>
    </div>
	<form action="resultados.php" method="post">
        <?php 
	        $ne= $_POST['ne'];
	        for ($i=1; $i <=$ne ; $i++) :	        	        
	        ?>	      
			<div class="panel panel-primary">
		        <div class="panel-heading">

		          	<h3 class="panel-title">Encuesta #<?php echo $i; ?>.</h3>
		        </div>
		        <div class="panel-body">
						<label>Edad</label><br>
						<input type="text" name="edad[]" /><br>
						<label>Sexo</label><br>
						<select name="sexo[]" id="">
						<option value="masculino">Masculino</option>
						<option value="femenino">Femenino</option>
						</select><br>
						<label>Cómo califica el servicio Asíncrono</label><br>
						<select name="servicio[]" id="">
						<option value="4">Excelente</option>
						<option value="3">Bueno</option>
						<option value="2">Regular</option>
						<option value="1">Malo</option>																								
						</select>			
		        </div>
		    </div>
   		<?php 	endfor; ?>
   		<input type="submit"/ value="Ver Resultados">
	</form>	
</div>	
<script  src="js/jquery.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>

