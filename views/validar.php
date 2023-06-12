<?php
session_start();
require("funciones.php ");

$correo=$_POST['correo'];
$contra=$_POST['contra'];


//$contra=md5($contra);

/**
 * ctrl+shift+c paleta de colores

 */

$k=new Base();
$link=$k->conectar();
$a="SELECT * FROM registrar WHERE correo='$correo' and contra='$contra'";
echo "$a";

$resu2=mysqli_query($link,$a);
while($f2=mysqli_fetch_array($resu2)){


$usudb=$f2[8];
$contradb=$f2[2];
}

if ($usudb==$correo && $contradb==$contra) {
	
	$_SESSION['usuario']=$usudb;
	$_SESSION['contra']=$contradb;

		echo '<script>alert("BIENVENIDO A NUESTRA PAGINA")</script>';
echo "<script>location.href='../index.php'</script>";	

}else{
echo '<script>alert("USUARIO O CLAVE INCORRECTA")</script>';
echo "<script>location.href='../views/login.view.php '</script>";
}





?>
