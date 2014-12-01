<html>
	<head>
		<title>Registrarse</title>
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
		<div class="col-md-10"><h1>Registrarse</h1></div>
		<div class="col-md-1"></div>
		</div>
		<hr>
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">

		<form name="user_form" action="paraRegistro.php" method="POST">
			Nombre de Usuario:<br />
			<input type="text" class="form-control" name="login" size="30" maxlength="100" />
			<br />Clave:
			<br />
			<input type="password" class="form-control" name="pass1" />
			<br />Repite la clave:
			<br />
			<input type="password" class="form-control" name="pass2" />
			<br />Nombre:
			<br />
			<input type="text" class="form-control" name="nombre" size="30" maxlength="100" />
			<br />E-mail:
			<br />
			<input type="text" class="form-control" name="email" size="30" maxlength="100" />
			<br />
			<input type="submit" class="btn btn-primary" name="crear" value="Crear Usuario" />
		</form>

		<p><a href="index.php">Log In</a></p>

		</div>
		<div class="col-md-6"></div>
		</div>	

	</body>
</html>