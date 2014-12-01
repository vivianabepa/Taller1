<?php
/**
 * Formulario de inicio de sesion
 * Referencia: http://reyvolsamweb.wordpress.com/2012/04/19/iniciando-sesin-sistema-de-inicio-de-sesin-en-php-y-mysql/
 */

session_start();
include "../includes/database.php";
$link=Conectarse();
$login = $_POST['login'];
$pass = $_POST['pass'];
$pass=sha1(md5($pass));
$query = sprintf("SELECT usuarios.id, usuarios.login, usuarios.nombre, usuarios.email, usuarios.password
	FROM usuarios WHERE usuarios.login='%s'&& usuarios.password = '%s'",
	$login, $pass);
$result=mysql_query($query,$link);

if(mysql_num_rows($result)){
	$array=mysql_fetch_array($result);
	$_SESSION["id"]= $array["id"];
	$_SESSION["login"]= $array["login"];
	$_SESSION["nombre"]= $array["nombre"];
	$_SESSION["email"]= $array["email"];
	$_SESSION["password"]= $array["password"];

	header("Location: user.php");
} else {
	echo "<h2>Login o Password Incorrectos</h2>";
}
?>