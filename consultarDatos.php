<?php  

include('baseDatos.php');


if(isset($_POST["btnBuscar"])){

    //recibir datos del formulario
    $nombre=$_POST["nombreBuscar"];

    //creo objeto de tipo BaseDatos (conexion)
    $operacionBaseDatos = new BaseDatos();

    //creo la consulta
    $consulta="SELECT nombre,correo,password from usuarios where nombre='$nombre'";

    //llamar a la clase BaseDatos y voy a utilizar su metodo para leer(buscar) en la BD
    $resultado=$operacionBaseDatos->consultarEnBaseDatos($consulta);
    print_r($resultado);



}else{
    echo("No se presiono");
}



?>