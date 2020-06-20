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


        //Escribir en la base de datos (insertar, actualizar, borrar)
        public function alterarBaseDatos($consultaSQL){

            $this->conectarConBaseDatos();
            $resultado=$this->conexion->query($consultaSQL);
            
            return($resultado);
            $this->conexion->close();
        }

        //Lectura en la base de datos (buscar)
        public function consultarEnBaseDatos($consultaSQL){

            $this->conectarConBaseDatos();
            $resultado=$this->conexion->query($consultaSQL);
            
            $arregloFilas=array();
            foreach($resultado as $registros){
                $arregloFilas[]=$registros;
            }
            
            return($arregloFilas);
            $this->conexion->close();




        }

        





    }








?>