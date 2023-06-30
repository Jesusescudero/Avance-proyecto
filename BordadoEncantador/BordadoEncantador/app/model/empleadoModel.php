<?php
    class Empleadomodel{
        private $bdconnection;
    
        public function __construct(){
            require_once('app/config/coneccion.php');
            $this->bdconnection= new BDConnection();
     
        }
        public function consultaempleado(){
			$sql = "SELECT *FROM tblempleado;";
            $connection=$this->bdconnection->getConnection();
            $result =$connection->query($sql);
		}
        public function actualizarempleado($apellidopa,$apellidoma,$direccion,$telefono,$nombre){
			$sql = "UPDATE tblempleado SET ApellidoP='$apellidopa',ApellidoM='$apellidoma',
            Direccion='$direccion',Telefono='$telefono' WHERE Nombre='$nombre';";
            $connection=$this->bdconnection->getConnection();
            $result =$connection->query($sql);
		}
        function eliminarEmpleado($apellidopa, $apellidoma, $direccion, $telefono, $nombre){
            $sql = "DELETE FROM tblempleado WHERE ApellidoP = '$apellidopa' AND ApellidoM = '$apellidoma' 
            AND Direccion = '$direccion' AND Telefono = '$telefono' AND Nombre = '$nombre'";
            $connection=$this->bdconnection->getConnection();
            $result =$connection->query($sql);
        }
    }
?>