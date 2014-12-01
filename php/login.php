<html>
    <head>
        <title>Iniciar Sesión</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
       

    </head>

    <body>

        <h1>Log In</h1>
        
        <form class="form" action="paraLogin.php" method="POST">
            <br />Nombre de usuario:
            <br />
            <input type="text" class="form-control" name="login">
            <br />Clave:
            <br />
            <input type="password" class="form-control" name="pass">
            <br />
            <br />
            <input class="btn btn-primary" type="submit" value="Ingresar">
        </form>

        <p><a href="registro.php">Registrase</a></p>

    </body>
</html>