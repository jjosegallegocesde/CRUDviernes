<?php  

    class BaseDatos{


        //atributos
        private $servidor="localhost";
        private $usuario="root";
        private $clave="";
        private $nombreBaseDatos="bd_tienda";
        private $conexion;

        //constructor
        public function __construct(){}


        //metodos
        
        public function conectarConBaseDatos(){

            //configurar la conexión
            $this->conexion= mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->clave,
                $this->nombreBaseDatos
            );

            //verificar la conexión
            if(!($this->conexion)){
                die('Error de conexión: ');
            }else{
                echo("Conexión exitosa");
            }


        }

        
        //Escribir en la base de datos
        public function alterarBaseDatos($sentenciaSQL){

            $this->conectarConBaseDatos();
            $resultado=$this->conexion->query($sentenciaSQL);
            return($resultado);
            $this->conexion->close();



        }





    }








?>