<?php

Class base{
private $serv="localhost";
private $usuario="root";
private $contra="";
// NOMBRE DE LA BASE DE DATOS 
private $base="lubricity";


//FUNCION PARA CONECTAR A LA BASE DE DATOS 
function conectar(){
//dentro de la funcion 
$conexion= mysqli_connect($this->serv, $this->usuario, $this->contra, $this->base) or die ("Error de conexion");

//confirmamos que se haya conectado
        if ($conexion) {
            echo "conectado";
        }
//retornamos la conexion

        return $conexion;

}
Function cerrar($con){
    mysqli_close ($con);
}
//ingreso de datos registro
Function ingresar($objeto){
    $conec=$this->conectar();
    $insertar= "INSERT INTO `registrar`(`nombreusuario`, `contra`, `apellido`, `nombre`, `dni`, `telefono`, `domicilio`, `correo`) VALUES('$objeto->usuario','$objeto->contra','$objeto->apellido','$objeto->nombre',$objeto->dni,$objeto->telefono,'$objeto->domicilio','$objeto->correo')";
 mysqli_query($conec,$insertar) or die ("ERROR");
//RETURN $insertar;
    echo'<script languaje="javascript">alert("ingresado");</script>';
$this->cerrar($conec);
}

Function ingresarturno($objeto){
    $conec=$this->conectar();
    $insertar= "INSERT INTO `turno`(`usuario`, `vehiculo`, `fecha`, `hora`, `patente`) VALUES('$objeto->usuario','$objeto->vehiculo','$objeto->fecha','$objeto->hora','$objeto->patente')";
 mysqli_query($conec,$insertar) or die ("ERROR");
//RETURN $insertar;
    echo'<script languaje="javascript">alert("ingresado");</script>';
$this->cerrar($conec);
}

function buscar($correo,$contra){

    $conec=$this->conectar();
    //creacion de consulta
    $consulta="SELECT * FROM registrar WHERE correo='".$correo."' and contra='".$contra."'";
    
   $conn=mysqli_query($conec,$consulta);
    
    $var=array();
    
    //para acceder a los resultados de la consulta creamos una varible nueva
              while($row=mysqli_fetch_array($conn)){
                    $v=new registrar();
    
                    $v->id_usuario=$row[0];
                    
    
                        array_push($var,$v);
    
                }
    
            return $var;    
    
    }

} //cierra clase base


Class registrar{
 
    //registro
    public $id_usuario;
    public $contra;
    public $apellido;
    public $nombre;
    public $dni;
    public $telefono;
    public $domicilio;
    public $correo;   
}

class turno{

    public $usuario;
    public $vehiculo;
    public $fecha;
    public $hora;
    public $patente;  
}
?> 