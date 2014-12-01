<?php 
	function Conectarse(){
		if (!($link=mysql_connect("localhost", "root", ""))) {
			echo "Error en la conexion con la base de datos.";
			exit();
		}
		if (!mysql_select_db("estudiantes_web",$link)){
			echo "Error seleccionando la base de datos.";
			exit();
		}
		return $link;
	}
	$link = Conectarse();
	mysql_close($link);
?>