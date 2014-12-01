<?php


include "../includes/database.php";

$link= Conectarse();

$login = $_POST['login'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$nombre= $_POST['nombre']; 
$email = $_POST['email'];
$query = sprintf("SELECT login FROM estudiantes_web.usuarios WHERE usuarios.login = '%s'", $login);
$result=mysql_query($query,$link);

if(mysql_num_rows($result)){
	echo "El usuario ya existe en la Base de Datos";
} else {
	mysql_free_result($result);
	if($pass1!=$pass2) {
		echo "Los passwords deben coincidir";
	} else {
		$pass1=sha1(md5($pass1));
		$query = sprintf("INSERT INTO estudiantes_web.usuarios (id, login, nombre, email, password)
		VALUES ('%s', '%s', '%s', '%s', '%s')", $id, $login, $nombre, $email, $password);
		$result=mysql_query($query,$link);
		if(mysql_affected_rows()){
			header("Location: index.php");
		} else {
			echo "Ocurrio un Error al Introducir los Datos";
		}
	}
}
?>