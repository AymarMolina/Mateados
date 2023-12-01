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
    public function getMasculino(){
        $masculino=0;
        try{
            $strquery="SELECT COUNT(*) as Usuarios FROM users  WHERE gender='1' ";
            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $masculino=$pquery->fetchColumn();      
            }
        }catch(PDOException $e){
            echo "MySql.getRegistros:". $e->getMessage()."";
            return -1;
        }
        return $masculino;

    }
    public function getFemenino(){
        $femenino=0;
        try{
            $strquery="SELECT COUNT(*) as Usuarios FROM users  WHERE gender='2' ";
            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $femenino=$pquery->fetchColumn();      
            }
        }catch(PDOException $e){
            echo "MySql.getRegistros:". $e->getMessage()."";
            return -1;
        }
        return $femenino;

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
    public function getColegios(){
        $colegios=0;
        try{
            $strquery="SELECT COUNT(*) as Colegios FROM schools";
            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $colegios=$pquery->fetchColumn();      
            }
        }catch(PDOException $e){
            echo "MySql.getColegios:". $e->getMessage()."";
            return -1;
        } 
        return $colegios-1;
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
    public function getGraficaColegios(){
        $jDatos='';
        $rawdata=array();
        $i=0;
        try{
            $strquery="SELECT schools.name as nombre, COUNT(*) as cantidad FROM users JOIN schools ON schools.id = users.idSchool GROUP BY users.idSchool";

            if($this->conBDPDO()){
                $pquery=$this->oConBD->prepare($strquery);
                $pquery->execute();
                $pquery->setFetchMode(PDO::FETCH_ASSOC);
                while($producto2=$pquery->fetch()){
                    $oColegio=new Colegio();
                    $oColegio->totalAlumnos=$producto2["cantidad"];
                    $oColegio->colegiosa=$producto2["nombre"];
                    $rawdata[$i]= $oColegio;
                    $i++;
                }
                $jDatos=json_encode($rawdata);
            }
        }catch(PDOException $e){
            echo "MySQL.getGraficaColegios: ". $e->getMessage()."\n";
        }
        return $jDatos;
    }
}
class Grafica{
    public $totalRegistros=0;
    public $totalEdades=0;
    public $fechaRegistro=0;
}
class Colegio{
    public $totalAlumnos=0;
    public $colegiosa=0;
}
?>