<?php

// Fuentes compartidas por Nico Luna que me ayudo a realizar este taller
//http://www.taringa.net/posts/hazlo-tu-mismo/14629402/Tutorial-Crear-un-sistema-de-Login-con-PHP-y-MySQL.html
//http://www.taringa.net/posts/hazlo-tu-mismo/14629402/Tutorial-Crear-un-sistema-de-Login-con-PHP-y-MySQL.html
//http://www.taringa.net/posts/hazlo-tu-mismo/17512963/Sistema-de-registro-y-login-de-usuarios-html-php-mysql-tuto.html 
//https://www.youtube.com/watch?v=40K1xnYPURw

session_start(); 
include_once "conexion.php"; 
             
?> 


<form action="" method="post" class="registro"> 
<div><label>User:</label> 
<input type="text" name="usuario"></div> 
<div><label>Password:</label> 
<input type="password" name="password"></div> 
<div><label>Repeat Password:</label> 
<input type="password" name="repassword"></div> 
<div> 
<input type="submit" name="enviar" value="Registrar"></div> 
<div><a href="login.php">Log In</a></div> 
</form> 
             
<?php 
if(isset($_POST['enviar'])) 
{ 
    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') 
    { 
        echo 'Por favor llene todos los campos.'; 
    } 
    else 
    { 
        $sql = 'SELECT * FROM usuarios'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
  
        while($result = mysql_fetch_object($rec)) 
        { 
            if($result->usuario == $_POST['usuario']) 
            { 
                $verificar_usuario = 1; 
            } 
        } 
  
        if($verificar_usuario == 0) 
        { 
            if($_POST['password'] == $_POST['repassword']) 
            { 
                $usuario = $_POST['usuario']; 
                $password = $_POST['password']; 
                $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')"; 
                mysql_query($sql); 
  
                echo 'Usted se ha registrado correctly.'; 
                echo '<a href="login.php">Logout</a>';
            } 
            else 
            { 
                echo 'Las claves no son coinciden, try again.'; 
            } 
        } 
        else 
        { 
            echo 'Hey ya te has registrado antes :).'; 
        } 
    } 
} 
?> 