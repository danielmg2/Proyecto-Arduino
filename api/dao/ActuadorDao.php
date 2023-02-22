<?

class ActuadorDao extends FactoryBD implements DAO{
    
    public static function findAll(){
        $sql = 'select * from actuador;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayActuadores= array();
        while($obj = $devuelve->fetchObject()){         
            //$actuador = new Actuador($obj->id_actuador, $obj->id_arduino, $obj->actuador,$obj->mensaje, $obj->fecha);
            array_push($arrayActuadores,$obj); 
        }
        return $arrayActuadores;
    }

    public static function findById($id){
        $sql = 'select * from actuador where id_actuador = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            //$actuador = new Actuador($obj->id_actuador, $obj->id_arduino, $obj->actuador,$obj->mensaje, $obj->fecha);
            return $obj;
        }  
        return null;
    }

    public static function delete($id){}
    
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
    public static function update($objeto){}
}