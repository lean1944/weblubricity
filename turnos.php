<?php include("template/cabecera.php"); ?>

<link rel="stylesheet" href="./css/fondo.css ">
<link rel="stylesheet" href="./css/formularioturno.css">

<head>
    <style>
        h4 {
            color: white;
        
        }
    </style>
</head>
<section class="form-register">

    <form class="container" method="POST" name="form-work" action="./views/accionesturno.php">
            
        <center><strong><h4>TURNO CAMBIO DE ACEITE</h4></strong></center>
        <input class="controls" type="text" name="usuario" id="usuario" placeholder="ingrese su usuario">
        
        <input class="controls" type="text" name="vehiculo" id="vehiculo" placeholder="ingrese su vehiculo">
        <input class="controls" type="date" name="fecha" id="fecha" placeholder="ingrese su fecha de colocacion">
        <input class="controls" type="time" name="hora" id="hora" placeholder="ingrese su hora de colocacion">
        <input class="controls" type="text" name="patente" id="patente" placeholder="ingrese su patente">
        <input class="botons" type="submit" value="confirmar turno">
    </form>

</section>
<?php include("template/pie.php"); ?>