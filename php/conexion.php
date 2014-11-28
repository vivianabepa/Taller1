<?php 

	$host="localhost";
	$user= "root";
	$password = "";
	$name="estudiantes_web";

	$con = mysql_connect($host, $user, $password) or die("Error en la conexion con la base de datos");
	$cons = mysqli_connect($host, $user, $password) or die("Error en la conexion con la base de datos");
	mysql_select_db($name,$con); 	

	?>