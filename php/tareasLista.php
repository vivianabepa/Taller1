<?php

include "../includes/database.php";
$link=Conectarse();
$query = "SELECT * FROM `tareas` ORDER BY FechaIn";
$result=mysql_query($query,$link);

if ($row = mysql_fetch_array($result)){ 
	   		echo "<table class='table table-bordered'> \n"; 
	   		echo "
	   		<tr>
	   		<th>Codigo</th>
	   		<th>FechaIn</th>
	   		<th>FechaFn</th>
	   		<th>Prioridad</th>
	   		<th>Tarea</th>
	   		<th>Descripcion</th>
	   		<th>Estudiante</th>
	   		</tr> \n";
	   	do { 
	    	echo "
	    	<tr>
	    	<td>".$row["Codigo"]."</td>
	    	<td>".$row["FechaIn"]."</td>
	    	<td>".$row["FechaFn"]."</td>
	    	<td>".$row["Prioridad"]."</td>
	    	<td>".$row["Tarea"]."</td>
	    	<td>".$row["Descripcion"]."</td>
	    	<td>".$row["Estudiante"]."</td>
	    	</tr> \n"; 
	   	} while ($row = mysql_fetch_array($result)); 
	   		echo "</table> \n"; 
		} else { 
			echo "<p>¡No hay tareas agregadas aún!</p>"; 
		} 
?>