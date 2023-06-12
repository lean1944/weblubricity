<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/fondo.css ">
    <link rel="stylesheet" href="../css/formularioturno.css">
    <link rel="icon" href="../img/logo.PNG"/>
    <title>REGISTRARSE</title>  
</head>

<body>
<section class="form-register">
        <form class="container" method="POST" name="form-work" action="./acciones.php">

        <center><h4>REGISTRATE</h4></center>   
          
        <input class="controls" type="text" name="usuario" id="usuario" placeholder=" usuario">
        <input class="controls" type="password" name="contra" id="contra" placeholder="contraseña">
        <input class="controls" type="text" name="apellido" id="apellido" placeholder="apellido">
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="nombre">
        <input class="controls" type="number" name="dni" id="dni" placeholder="dni">
        <input class="controls" type="number" name="telefono" id="telefono" placeholder="telefono">
        <input class="controls" type="text" name="domicilio" id="domicilio" placeholder="domicilio">
        <input class="controls" type="text" name="correo" id="correo" placeholder="correo">
        <input class="botons" type="submit" value=" REGISTRATE">

        <p>
            Si ya tiene una cuenta 
            <a href="login.view.php">INICAR SESION</a>
        </p>
        </form>

    </section>
</body>
</html>