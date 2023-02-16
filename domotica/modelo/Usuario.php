<?

class Usuario{
    private $id_usuario;
    private $nombre;
    private $pass;
    private $rol;
    
    

    public function __construct($id_usuario,$nombre,$pass,$rol)
    {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->rol = $rol;
        
    }
    
    public function __get($get){
        if(property_exists(__CLASS__,$get))
            return $this->$get;
        return null;
    }

    public function __set($clave,$valor){
        if(property_exists(__CLASS__,$clave))
            $this->$clave=$valor;
        
    }

}