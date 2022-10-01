<?php
include_once 'controllers/muralsController.php';
include_once 'controllers/typsController.php';

//defino la base url para la construccion de urls semanticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
//nombre servidor, puerto  y despues la ruta donde esta el archivo route.php->PAGINA MURAL

//lee accion
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; //accion por defecto
}

//parsea la accion y le agraga / --> 1/2/
$params = explode('/', $action);
//determina que camino sigue segun la accion

$MuralsController = new MuralsControllers();
$TypsController = new TypsControllers();

switch ($params[0]) {
    case 'home':
        $MuralsController->showMurals();
        break;
    case 'verDetalles':       
        $MuralsController->showMuralsById($params[1]);
        break;
    case 'tecnicas':
        $TypsController->searchByTyps($params[1]);
        break;


    default:
        echo '404 page not found';
        break;
}
