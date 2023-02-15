<?
class Arduino{
    
    private $id_arduino;
    private $nombre;
    private $clase;


    public function __construct($id_arduino, $nombre,  $clase)
    {
        $this->id_arduino=$id_arduino;
        $this->nombre=$nombre;
        $this->clase=$clase;
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
?>