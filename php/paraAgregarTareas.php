<?php

include "../includes/database.php";
$link=Conectarse();

$Codigo = $_POST['Codigo'];
$FechaIn= $_POST['FechaIn'];
$FechaFn = $_POST['FechaFn'];
$Prioridad = $_POST['Prioridad'];
$Tarea= $_POST['Tarea'];
$Descripcion= $_POST['Descripcion'];  
$Estudiante= $_POST['Estudiante'];  

$query = "INSERT INTO `tareas`(`Codigo`, `FechaIn`, `FechaFn`, `Prioridad`, `Tarea`, `Descripcion`,`Estudiante` ) VALUES ('{$_POST['Codigo']}','{$_POST['FechaIn']}','{$_POST['FechaFn']}','{$_POST['Prioridad']}','{$_POST['Tarea']}','{$_POST['Descripcion']}','{$_POST['Estudiante']}')";

$result=mysql_query($query,$link);
if(mysql_affected_rows()){
			header("Location: user.php");
		} else {
			echo "Ocurrio un Error al Introducir los Datos";
		}
?>