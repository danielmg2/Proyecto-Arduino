<?

class ActuadorDao extends FactoryBD implements DAO{

    public static function delete($id){}
    public static function update($objeto){}

    public static function findAll(){
        $sql = 'select * from actuador;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayActuadores= array();
        while($obj = $devuelve->fetchObject()){    
        while($obj = $devuelve->fetchObject()){    
            array_push($arrayActuadores,$obj); 
        }
        return $arrayActuadores;
    }

    public static function findById($id){
        $sql = 'select * from actuador where id_arduino = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        }  
        return null;
    }

    public static function insert($objeto){
        $sql = 'insert into actuador values(?,?,?,?,?)';
        $objeto = (array)$objeto;
        $datos = array();
        foreach($objeto as $att){
            array_push($datos,$att); 
        }
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }

    public static function findByDays($fecha1,$fecha2){

        $sql=" select * from actuador where fecha between ? and ?;";
        $datos = array($fecha1,$fecha2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayActuadores= array();
        while($obj = $devuelve->fetchObject()){         

            array_push($arrayActuadores,$obj); 
        }
        return $arrayActuadores;
    }
    public static function findByRecurso($recurso){
        $sql = 'select id_arduino,actuador,fecha from actuador where actuador LIKE "'.$recurso.'";';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchAll(PDO::FETCH_ASSOC);
        if($obj){
            return $obj;
        }  
        return null;
    }

    public static function findRecursoByDays($recurso,$fecha1,$fecha2){

        $sql=" select id_arduino,actuador,mensaje from actuador where fecha between ? and ? AND actuador LIKE '".$recurso."';";
        $datos = array($fecha1,$fecha2);
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayActuadores= array();
        while($obj = $devuelve->fetchObject()){         
           
            array_push($arrayActuadores,$obj); 
        }
        return $arrayActuadores;
    }
}