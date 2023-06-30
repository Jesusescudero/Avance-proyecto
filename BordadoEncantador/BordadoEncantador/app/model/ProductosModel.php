<?php
    class ProductoModel{
     
        private $bdconnection;
    
        public function __construct(){
            require_once('app/config/coneccion.php');
            $this->bdconnection= new BDConnection();
     
        }
        public function ConsultaProductos(){
			$sql = "SELECT *FROM tblproducto;";
            $connection=$this->bdconnection->getConnection();
            $result =$connection->query($sql);
		}
        function consultarDatos($nombre){
        $servername = "nombre_servidor";
        $username = "nombre_usuario";
        $password = "contraseña";
        $dbname = "nombre_base_datos";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
        }

            $sql = "SELECT tblcliente.`Nombre`, tblcliente.ApellidoP, tblcliente.ApellidoM, (tblventa.`Total`) AS Gasto
            FROM tblcliente, tblventa
            WHERE tblcliente.`ID_venta` = tblventa.`ID_Venta`
            AND tblcliente.`Nombre` = '$nombre'";

            $result = $conn->query($sql);

        $resultados = "";
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resultados .= "Nombre: " . $row["Nombre"] . "<br>";
            $resultados .= "Apellido Paterno: " . $row["ApellidoP"] . "<br>";
            $resultados .= "Apellido Materno: " . $row["ApellidoM"] . "<br>";
            $resultados .= "Gasto: " . $row["Gasto"] . "<br>";
            $resultados .= "<br>";
        }
    } else {
        $resultados = "No se encontraron resultados.";
    }

    $conn->close();

    return $resultados;
   }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $resultados = consultarDatos($nombre);
  }

    
	}
?>
    