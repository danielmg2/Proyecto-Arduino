<?
require_once './controlador/ControladorPadre.php';
require_once './controlador/ControladorDomotica.php';

require_once './modelo/Actuador.php';
require_once './modelo/Arduiono.php';
require_once './modelo/Sensor.php';

require_once './dao/ActuadorDao.php';
require_once './dao/DAO.php';
require_once './dao/FactoryBD.php';


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