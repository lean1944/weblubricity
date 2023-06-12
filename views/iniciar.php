<?php

include('funciones.php');
session_start();
echo $_SESSION["ingreso"]=0;
$user=$_POST['txt1'];
$contra=$_POST['txt2'];

$var=new base();
$var=$var->buscar($user,$contra);
if($var){
echo "ingresado";


$_SESSION["ingreso"]=1;

header("location:../index.php");

}else{
    echo "usuario o contraseña incorrecta";
}
?>