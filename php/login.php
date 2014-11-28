<!-- este taller lo realice en compañia de nico luna que me explico y me ayudo -->

<?php 
session_start(); 
include_once "conexion.php"; 
  
function verificar_login($user,$password,&$result) { 

    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'"; 
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysqli_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
 
if(!isset($_SESSION['userid'])) 
{ 

    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            $_SESSION['user'] = $result->usuario; 
            header("location:tabla.php"); 

        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?> 

  
<form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
    <div><a href="index.php">Register</a></div> 
</form> 
<?php 
} else { 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="logout.php">Logout</a>'; 
} 
?>