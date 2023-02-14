<?


class UsuarioDAO extends FactoryBD implements DAO{
    public static function findAll(){
        $sql = 'select * from USUARIOS;';
        $datos = array();
        $devuelve = parent::ejecuta($sql,$datos);
        $arrayUsuarios = array();
        while($obj = $devuelve->fetchObject()){         
            $usuario = new Usuario($obj->id,$obj->nombre, $obj->password,$obj->idRol);
            array_push($arrayUsuarios,$usuario);
        }
        return $arrayUsuarios;
    }


    public static function findById($id){
        $sql = 'select * from USUARIOS where nombre = ?;';
        $datos = array($id);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $usuario = new Usuario($obj->id,$obj->nombre, $obj->password, $obj->idRol);
            return $usuario;
        }  
        return null;
    }


    public static function delete($nombre){
        $sql = 'delete from USUARIOS where usuario = ?;';
        $datos = array($nombre);
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }



    //Insertar nuevo usuario
    public static function insert($objeto){
        $sql = 'insert into USUARIOS values(?,?,?,?)';
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

    //Actualizar nombre y contraseña
    public static function update($objeto){
        $sql = 'update USUARIOS set nombre = ?, password = ?, where usuario = ? ';
        $datos = array($objeto->usuario,$objeto->contraseña,$objeto->email,$objeto->fecha,$_SESSION['nombre']);
        $devuelve = parent::ejecuta($sql,$datos); 
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }

    public static function valida($user,$pass){
        //FALTA SHA256
        $sql = 'select * from USUARIOS where nombre = ? and password = ?;';
        $passh = hash('sha256',$pass);
        $datos = array($user,$passh);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
             $usuario = new Usuario($obj->id, $obj->nombre, $obj->password,$obj->idRol);
            return $usuario;
        }else{
            return null;
        }
    }
}