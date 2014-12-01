<html>
	<head>
		<title>Tareas</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		

	</head>

	<body>

		<form name="user_form" action="ParaAgregarTareas.php" method="POST">

			Tarea<br />
			<input type="text" class="form-control" name="tarea" size="40" maxlength="100" />
			<br />
			<br />Fecha de Inicio:
			<br />
			<input type="date" class="form-control" name="Inicializacion" />
			<br />
			<br />Fecha de Finalizacion:
			<br />
			<input type="date" class="form-control" name="Finalizacion" />
			<br />
			<br />Prioridad:
			<br />
			<select class="form-control" name="Prioridad">
				<option value="Alta">Alta</option>
				<option value="Normal">Normal</option>
				<option value="Baja">Baja</option>
			</select>
			<br />
			<br />Descripcion:
			<br />
			<input type="text" class="form-control" name="descripcion" size="40" maxlength="100" />
			<br />
			<br />Asignar Tarea:
			<br />
			 <?php
			 	/**
				 * Selecciona el nombre de usuario para posteriormete mostrarlo en el dropdown list del formulario de tareas
				 *
				 * Referencia: http://stackoverflow.com/questions/20277422/select-option-from-dropdown-menu-with-php-and-mysql
				 *
				 */
			        include "../includes/database.php";
			        $link=Conectarse();
					$query = "SELECT * FROM usuarios ORDER BY login ASC";
					$result=mysql_query($query,$link);
			        $totalRows_RsCourse = mysql_num_rows($result);
			        if($totalRows_RsCourse)
			        {
			        echo '<select name="asignar" class="form-control"> <option value="" SELECTED> Seleccionar usuario</option>';
			            $count=0;
			            while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
			            {
			            $count++;
			            echo '<option value="'.$row['login'].'">'.$row['login'].'</option>';
			            }
			            echo '</select>';
			        }
			        else
			        {
			        echo 'No hay usuarios para mostrar.';
			        }
			?>
			<br />
			<br />
			<input type="submit" class="btn btn-primary" name="agregar" value="Agregar tarea" />
		</form>

		<br />

		<?php 
		include_once("tareasLista.php");
		?>

	</body>
</html>