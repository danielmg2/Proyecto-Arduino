<?
require_once './controlador/ControladorPadre.php';
require_once './controlador/ControladorActuador.php';
require_once './controlador/ControladorSensor.php';

require_once './modelo/Actuador.php';
require_once './modelo/Arduino.php';
require_once './modelo/Sensor.php';

require_once './dao/DAO.php';
require_once './dao/FactoryBD.php';
require_once './dao/ActuadorDao.php';
require_once './dao/ArduinoDao.php';
require_once './dao/SensorDao.php';


$recurso = ControladorPadre::recurso();

if($recurso){
    if($recurso[1] == 'sensor'){
        $controlador = new ControladorSensor();
        $controlador -> controlar();
    }elseif($recurso[1] == 'actuador'){
        $controlador = new ControladorActuador();
        $controlador -> controlar();
    }
}