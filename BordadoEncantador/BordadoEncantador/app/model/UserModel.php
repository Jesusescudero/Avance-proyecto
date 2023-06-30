<?php
    class UserModel{
        private $bdconnection;
        
        public function __construct(){
            require_once('app/config/coneccion.php');
            $this->bdconnection= new BDConnection();
        }
        public function GetAll(){
            $sql="SELECT * FROM usuario";
            $connection=$this->bdconnection->getConnection();
            $result=$connection->query($sql);
            $users=array();
            while($user =$result->fetch_assoc()){
                $users[]=$user;
            }
            $bdconnection->closeConnection();
            return $users;          
        }

        public function getById($id){
                $sql='SELECT * FROM usuario WHERE iduser= $id';
                $connection=$this->bdconnection->getConnection();
                $result =$connection->query($sql);
                if($result && $result->num_rows > 0){
                    $user = $result->fetch_assoc();
                } else{
                    $user=false;
                }
                $bdconnection->closeConnection();
                return $user;
        }
        public function getCredentials($user,$password){
                $sql='SELECT * FROM usuario WHERE User == $user AND Password == $password';
                $connection=$this->bdconnection->getConnection();
                $result =$connection->query($sql);
                if($result && $result->num_rows > 0){
                    $user = $result->fetch_assoc();
                } else{
                    $user=false;
                }
                $bdconnection->closeConnection();
                return $user;
        }
        

        
    }
?>