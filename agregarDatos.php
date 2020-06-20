<?php 

include('baseDatos.php');


if(isset($_POST["btnEnviar"])){

    //recibo los datos del formulario
    $nombre=$_POST["nombreUsuario"];
    $correo=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"];

    //creo objeto de tipo BaseDatos (conexion)
    $operacionBaseDatos= new BaseDatos();

    //crear la consulta
    $consulta="INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre','$correo','$password')";

    //llamar a la clase BaseDatos y voy a utilizar su metodo para alterar(insertar o escribir dentro) la BD
    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

    //validemos el resultado
    if($resultado){
        echo("<br>");
        echo("Transacción éxitosa, datos agrgados");
    }else{
        echo("<br>");
        die("Error en la transacción");
    }


    

}else{

    echo("no se presiono");
}






?>