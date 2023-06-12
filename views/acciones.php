<?php
include('funciones.php');
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$domicilio=$_POST['domicilio'];
$correo=$_POST['correo'];



$var=new registrar();

$var->usuario=$usuario;
$var->contra=$contra;
$var->apellido=$apellido;
$var->nombre=$nombre;
$var->dni=$dni;
$var->telefono=$telefono;
$var->domicilo=$domicilio;
$var->correo=$correo;





$objeto=new base();
echo $objeto->ingresar($var);

header ("location: ../index.php ");
?>
