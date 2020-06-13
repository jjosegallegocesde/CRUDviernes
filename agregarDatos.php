<?php 

include('baseDatos.php');


if(isset($_POST["btnEnviar"])){

    //recibo los datos del formulario
    $nombre=$_POST["nombreUsuario"];
    $correo=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"];

    $operacionBaseDatos= new BaseDatos();

    $operacionBaseDatos->conectarConBaseDatos();

}else{

    echo("no se presiono");
}






?>