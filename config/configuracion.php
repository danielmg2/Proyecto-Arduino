<?
//bbdd
require_once('./config/conexion.php');
//funciones
require_once('./core/funcionesSesiones.php');
// require_once('./core/valida.php');


//DAO
require_once('./dao/DAO.php');
require_once('./dao/FactoryBD.php');
require_once('./dao/UsuarioDAO.php');
require_once('./modelo/Usuario.php');


//Controladores
$controladores = array(
    'login' => './controlador/LoginController.php',
    'home' => './controlador/HomeController.php'
);



//vistas
$vistas = array(
    'home' => 'HomeView.php',
    'login' => 'LoginView.php'
);
