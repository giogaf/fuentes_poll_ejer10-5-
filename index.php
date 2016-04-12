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
	        <h1>Encuesta</h1>
	    </div>
		<div class="panel panel-primary">
	        <div class="panel-heading">
	          	<h3 class="panel-title">Total encuestados.</h3>
	        </div>
	        <div class="panel-body">
				<form action="5.php" method="post">
					<label>Ingrese número de personas </label><br>
					<input type="text" name="ne" /><br>
					<br>
					<input type="submit"/ value="Ir a encuesta">
				</form>	
	        </div>
	    </div>
	</div>	
	<script  src="js/jquery.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
</body>
</html>


