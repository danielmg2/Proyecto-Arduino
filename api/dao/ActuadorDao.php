<?

class ActuadorDao extends FactoryBD implements DAO{
    public static function findAll(){
        $sql = 'select * from actuador;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayActuadores= array();
        while($obj = $devuelve->fetchObject()){         
            $actuador = new Actuador($obj->id_actuador, $obj->id_arduino, $obj->actuador,$obj->mensaje, $obj->fecha);
            array_push($arrayActuadores,$actuador); 
        }
        return $arrayActuadores;
    }
    public static function findById($id){
        $sql = 'select * from actuador where id_actuador = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $actuador = new Actuador($obj->id_actuador, $obj->id_arduino, $obj->actuador,$obj->mensaje, $obj->fecha);
            return $actuador;
        }  
        return null;
    }
    public static function delete($id){
        $sql = 'delete from actuador where codigo = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
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
    public static function update($objeto){
        $sql = 'update actuador set id_arduino = ?, actuador = ?, mensaje = ?, fecha = ? where id_actuador = ? ';
        $datos = array($objeto->id_arduino,$objeto->actuador,$objeto->mensaje,$objeto->$fecha, $objeto->$id_actuador);
        try{
            $devuelve = parent::ejecuta($sql,$datos); 
            if(!$devuelve){
                return false;
            }
            return true;
        }catch(Exception $e){
            $_SESSION['error']='No se puede modificar. Está sujeto a clave foranea';
            return false;
        }
        
    }
}