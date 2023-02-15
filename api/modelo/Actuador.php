<?
class Actuador{
    
    private $id_actuador;
    private $id_arduino;
    private $actuador;
    private $mensaje;
    private $fecha;


    public function __construct($id_actuador, $id_arduino,$actuador,$mensaje, $fecha)
    {
        $this->id_actuador=$id_actuador;
        $this->id_arduino=$id_arduino;
        $this->actuador=$actuador;
        $this->mensaje=$mensaje;
        $this->fecha=$fecha;

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