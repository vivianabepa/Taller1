<?php 

	$host="localhost";
	$user= "root";
	$password = "";

	$con = mysqli_connect($host, $user, $password) or die("Error en la conexion con la base de datos");

	$codigo = $_POST["Codigo"];
	$fechaInicializacion = $_POST["FechaIn"];
	$fechaFinalizacion= $_POST["FechaFn"];
	$prioridad = $_POST["Prioridad"];
	$tarea = $_POST["Tarea"];
	$descripcion = $_POST['Descripcion'];
	


	$query = "INSERT INTO estudiantes_web.tareas('codigo', 'fechaInicializacion', 'fechaFinalizacion', 'prioridad', 'tarea','descripcion' ) VALUES ('$Codigo', '$FechaIn', '$FechaFn', '$Prioridad', '$Tarea','$Descripcion')";
	$result = mysqli_query($con,$query);

	echo "a insertado los siguentes datos:";
	echo "<br><br>";
	echo "codigo: $Codigo";
	echo "<br>";
	echo "fechaInicializacion: $FechaIn";
	echo "<br>";
	echo "fechaInicializacion: $FechaFn";
	echo "<br>";
	echo "prioridad: $Prioridad";
	echo "<br>";
	echo "tarea: $Tarea";
	echo "<br><br>";
	echo "descripcion: $Descripcion";
	echo "<br>";
	
?>

<a href="tabla.php">Regresar</a>