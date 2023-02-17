<?
class Sensor{
    
    private $id_sensor;
    private $id_arduino;
    private $personas;
    private $fecha;
    private $temperatura;
    private $luminosidad;
    private $humedad;

    public function __construct($id_sensor,$id_arduino,$personas, $fecha,  $temperatura,$luminosidad,$humedad)
    {
        $this->id_sensor=$id_sensor;
        $this->id_arduino=$id_arduino;
        $this->personas=$personas;
        $this->fecha=$fecha;
        $this->temperatura=$temperatura;
        $this->luminosidad=$luminosidad;
        $this->humedad=$humedad;

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