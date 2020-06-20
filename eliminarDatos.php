<?php 

include('baseDatos.php');

if(isset($_POST["btnEliminar"])){

    //traer datos del formulario
    $nombre=$_POST["nombreEliminar"];

    //creo objeto de tipo BaseDatos (conexion)
    $operacionBaseDatos = new BaseDatos();

    //consulta para eliminar los datos
    $consulta="DELETE from usuarios where nombre='$nombre'";

    //llamar a la clase BaseDatos y voy a utilizar su metodo para alterar(insertar o escribir dentro) la BD
    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

    //validemos el resultado
    if($resultado){
        echo("<br>");
        echo("Transacción éxitosa, datos eliminados");
    }else{
        echo("<br>");
        die("Error en la transacción");
    }

}else{
    echo ("no se presiono");
}





?>