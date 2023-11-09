<?php
class MySQL{
    private $oConBD=null;
    public function conBDPDO(){
        try{
            $this->oConBD=new PDO("mysql:host="."127.0.0.1".";dbname="."login_register_db","root","");
            return true;
        }catch(PDOException $e){
            echo "Error al conectar a la base de datos: ". $e->getMessage()."\n";
            return false;
        }
    }
    public function getRegistros(){
        $registros=0;
        try{
            $strquery="SELECT COUNT(*) as Usuarios FROM users";
            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $registros=$pquery->fetchColumn();      
            }
        }catch(PDOException $e){
            echo "MySql.getRegistros:". $e->getMessage()."";
            return -1;
        }
        return $registros;
    }
    public function getEdades(){
        $edades=0;
        try{
            $strquery="SELECT AVG(edad) as Edad FROM users";
            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $edades=$pquery->fetchColumn();      
            }
        }catch(PDOException $e){
            echo "MySql.getEdades:". $e->getMessage()."";
            return -1;
        }
        return $edades;   
    }
    public function getComentarios(){
        $comentarios=0;
        try{
            $strquery="SELECT COUNT(*) as Usuarios FROM users";
            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $comentarios=$pquery->fetchColumn();      
            }
        }catch(PDOException $e){
            echo "MySql.getComentarios:". $e->getMessage()."";
            return -1;
        } 
        return $comentarios;
    }
    public function getDatosGrafica(){
        $jDatos='';
        $rawdata=array();
        $i=0;
        try{
            $strquery="SELECT COUNT(*) as tUsuarios, AVG(edad) as tEdad
            ,DATE_FORMAT(fecha, '%Y-%m-%d') as fecha FROM users GROUP BY DATE_FORMAT(fecha,'%Y-%m-%d')";

            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $pquery->setFetchMode(PDO::FETCH_ASSOC);
                while($producto=$pquery->fetch()){
                    $oGrafica=new Grafica();
                    $oGrafica->totalRegistros=$producto["tUsuarios"];
                    $oGrafica->totalEdades=$producto["tEdad"];
                    $oGrafica->fechaRegistro=$producto["fecha"];
                    $rawdata[$i]= $oGrafica;
                    $i++;
                }
                $jDatos=json_encode($rawdata);
            }
        }catch(PDOException $e){
            echo "MySQL.getDatosGrafica: ". $e->getMessage()."\n";
        }
        return $jDatos;
    }
}
class Grafica{
    public $totalRegistros=0;
    public $totalEdades=0;
    public $fechaRegistro=0;
}
?>