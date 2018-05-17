<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio sesi&oacute;n</title>
</head>
<body>
    <form class="inicio_sesion" method="post" action="../Funciones/Login/login.php">
        <h3>Inicio sesi&oacute;n</h3>
        <label for="usu_login">Usuario</label>
        <input required="required" name="usu_login" type="text">
        <label for="contra_login">Contrase&ntilde;a</label>
        <input required="required" name="contra_login" type="password">
        <input type="submit" value="Ingresar">
    </form>
    <form class="registro" method="post" action="../Funciones/Login/registro.php">
        <h3>Registro</h3>
        <label for="usu_registro">Usuario</label>
        <input required="required" name="usu_registro" type="text">
        <label for="contra_registro">Contrase&ntilde;a</label>
        <input required="required" name="contra_registro" type="password">
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
