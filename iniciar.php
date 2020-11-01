<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
    <?php include ("./Recursos/templates/bootstrap.php"); ?>
    <link rel="stylesheet" href="./Recursos/css/general.css">
</head>
<?php include ("./Recursos/templates/header.php"); ?>
<body>
<form action="form.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="contrasenia">
    </div>
    <button type="submit" class="btn btn-primary">Log in</button>
</form>
</body>
</html>