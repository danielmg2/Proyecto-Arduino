<?
class Sensor{
    
    private $id_sensor;
    private $id_arduino;
    private $personas;
    private $fecha;
    private $temperatura;
    private $luminosidad;
    private $humedad;

    public function __construct($id_sensor,$id_arduino, $fecha,  $temperatura, $humedad, $luminosidad,$personas)
    {
        $this->id_sensor=$id_sensor;
        $this->id_arduino=$id_arduino;
        $this->fecha=$fecha;
        $this->temperatura=$temperatura;
        $this->humedad=$humedad;
        $this->luminosidad=$luminosidad;
        $this->personas=$personas;
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