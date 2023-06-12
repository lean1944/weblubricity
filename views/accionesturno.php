<?php
include('funciones.php');

$usuario=$_POST['usuario'];
$vehiculo=$_POST['vehiculo'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$patente=$_POST['patente'];

$var=new turno();

$var->usuario=$usuario;
$var->vehiculo=$vehiculo;
$var->fecha=$fecha;
$var->hora=$hora;
$var->patente=$patente;

$objeto=new base();
$objeto->ingresarturno($var);

header ("location: ../turnos.php ");


?>
