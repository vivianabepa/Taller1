<!DOCTYPE html> 
<html> 
<head> 
	<title>Tareas</title> 

	</head> 
		<body> 

			<header> </header> 

				<nav id ="enlaces"> 
	<?php 
		session_Start();
		include_once("conexion.php"); 
		echo "Welcomw,  ".$_SESSION['user']."<br   />";
		echo "<a href='logout.php'>Salir</a>";

	 //con esto se busca el valor en la base de datos
  	$query_cons =  "SELECT usuario FROM gestion_de_tareas.usuarios WHERE 1";
	$result_cons = mysqli_query($cons,$query_cons);

	 $usuarios = [];

	while($row = mysqli_fetch_array($result_cons)){
		array_push($usuarios,$row["usuario"]);
	}
	
	?> 

		</nav> 

			<form name="form" action="insertarDatos.php" method="POST">
			<strong>
			<h2>Insertar tareas</h2>
			</strong>

			<h4>Seleccione la prioridad:
			<select name="prioridad">
			<option value="alta">Alta</option>
			<option value="media">Media</option>
			<option value="baja">Baja</option>
			</select>

		<br></br>

		</h4>

		<h5>
		Fecha de creacion: <input name="creacion" type="date">
		</h5>

		<h5>
		Fecha de finalizacion: <input name="finalizacion" type="date">
		</h5>

		<h5>
		Descripcion: <input name="descripcion" type="text">
		</h5>

		<?php
		echo "<h5>Usuario al que se le asigna la tarea: ";
		echo "<select name='usuario'>";
		for ($i=0; $i < sizeof($usuarios); $i++) { 
		echo "<option>".$usuarios[$i]."</option>";
	}
		echo "</select>";
		echo "</h5>";	
		?>

		<input name="Enviar" type="submit" value="Enviar">

		</form>

	</body> 

</html> 