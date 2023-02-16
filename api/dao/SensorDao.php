<?

class ActuadorDao extends FactoryBD implements DAO{
    
    public static function findAll(){
        $sql = 'select * from sensor;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arraySensor= array();
        while($obj = $devuelve->fetchObject()){         
            $sensor = new Sensor($obj->id_sensor, $obj->id_arduino,$obj->fecha, $obj->temperatura,$obj->humedad, $obj->luminosidad, $obj->personas);
            array_push($arraySensor,$sensor); 
        }
        return $arraySensor;
    }

    public static function findById($id){
        $sql = 'select * from sensor where id_sensor = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $sensor = new Sensor($obj->id_sensor, $obj->id_arduino,$obj->fecha, $obj->temperatura,$obj->humedad, $obj->luminosidad, $obj->personas);
            return $sensor;
        }  
        return null;
    }

    public static function delete($id){}
    
    public static function insert($objeto){
        $sql = 'insert into sensor values(?,?,?,?,?.?)';
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