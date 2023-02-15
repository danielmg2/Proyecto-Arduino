<?

require './config/configuracion.php';

session_start();

//Si pulso cerrar sesion
if (isset($_REQUEST['logout'])) {
    session_destroy();
    header('Location: ./index.php');
    exit;
}

//Si es la primera vez que entra va directo al login
if(!isset($_SESSION['pagina'])){
    $_SESSION['controlador'] = $controladores['login'];
    $_SESSION['pagina'] = 'login';
    $_SESSION['vista'] = $vistas['login'];
    require_once $_SESSION['controlador'];
}else{
    require_once $_SESSION['controlador'];
}
require_once('./vista/layout.php');
?>