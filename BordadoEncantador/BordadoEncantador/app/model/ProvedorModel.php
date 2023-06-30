<?php
    class provedormodel{
        private $bdconnection;
    
        public function __construct(){
            require_once('app/config/coneccion.php');
            $this->bdconnection= new BDConnection();
        }
        function consultarProvedor($nombreProducto)
    {
        $sql = "SELECT tblproveedor.Nombre, tblproveedor.Telefono, tblproducto.Nombre, tblproducto.Precio
        FROM tblproveedor, tblproducto
        WHERE tblproveedor.ID_Producto = tblproducto.ID_Producto
        AND tblproducto.Nombre = '$nombreProducto'";

        $connection = $this->bdconnection->getConnection();
        $result = $connection->query($sql);
    }
    function provedormostrar()
    {
        $sql = "SELECT tblproveedor;";
        $connection = $this->bdconnection->getConnection();
        $result = $connection->query($sql);
    }

}
?>