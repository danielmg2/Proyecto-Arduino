<?

class ArduinoDao extends FactoryBD implements DAO{
    
    public static function findAll(){
        $sql = 'select * from arduino;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayArduinos= array();
        while($obj = $devuelve->fetchObject()){         
            $arduino = new Arduino($obj->id_arduino, $obj->nombre, $obj->clase);
            array_push($arrayArduinos,$arduino); 
        }
        return $arrayArduinos;
    }

    public static function findById($id){
        $sql = 'select * from arduino where id_arduino = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $arduino = new Arduino($obj->id_arduino, $obj->nombre, $obj->clase);
            return $arduino;
        }  
        return null;
    }

    public static function delete($id){}
    
    public static function insert($objeto){
        $sql = 'insert into arduino values(?,?)';
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