<?php
/**
 * Muestra los datos del usuario que ha iniciado sesion (perfil)
 *
 * Referencia: http://reyvolsamweb.wordpress.com/2012/05/29/creando-el-panel-y-finalizando-sistema-de-inicio-de-sesin-en-php-y-mysql/
 *
 */
	session_start();
?>

<html>
	<head>
		<title>Usuario</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	</head>

<body>

		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10"><h1>Bienvenido <?php echo $_SESSION["nombre"]; ?> </h1></div>
		<div class="col-md-1"></div>
		</div>
		<hr>
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">

			<?php 
				include_once("tareas.php");
			?>

			<p><a href="logout.php">Cerrar Sesión</a></p>

		</div>
		<div class="col-md-4"></div>
		</div>

</body>
</html>