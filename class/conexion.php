<?php
class conexion{
    $local = "localhost";
    $user = "root";
    $password ="";
    $db = "";
    $conector = "";
    public __function(){
        $conexion = mysqli_connect($this->local, $this->user, $this->password,$this->db);
        if($conexion){
            $this->conector = $conexion;
        }else{
            echo "Error conectando. ".$conexion->error;
            return false;
        }
    }
    
    public function consultar($sql){
        
        $respQuery = $this->query($sql);
        if($respQuery){
            return $respQuery;
        }else{
            return false;
        }
    }
    public function actualizar($tabla,$campos,$where){
        $sql = " update ".$tabla." set ".$campos." where ".where." ";
        $respQuery = $this->query($sql);
        if($respQuery){
            return true;
        }else{
            return false;
        }
    }
    
}

?>