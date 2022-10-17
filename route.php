<?php
//defino la base url para la construccion de urls semanticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
//nombre servidor, puerto  y despues la ruta donde esta el archivo route.php->PAGINA MURAL

include_once 'controllers/muralsController.php';
include_once 'controllers/typesController.php';
include_once 'controllers/authController.php';





//lee accion
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; //accion por defecto
}

//parsea la accion y le agraga / --> 1/2/
$params = explode('/', $action);
//determina que camino sigue segun la accion

$muralsController = new MuralsControllers();
$typesController = new TypesControllers();
$authController = new AuthController();

switch ($params[0]) {

        //login
    case 'login':
        $authController->showFormLogin();
        break;

    case 'hash':
        $authController->generateHash();
        break;

    case 'verify':
        $authController->verifyUser();
        break;

    case 'logout':
        $authController->logOut();
        break;

  
        //vista publica
    case 'home':
        $muralsController->showMurals();
        break;
    case 'viewDetail':
        $muralsController->showMuralsById($params[1]);
        break;
    case 'techniques':
        $typesController->types();
        break;

    case 'viewMuralsByTypes':
        $muralsController->listMuralsByTypes($params[1]);
        break;


        //ABM techniques
    case 'addFormTechniques':
        $typesController->showCreateForm();
        break;
    case 'addTechniques':
        $typesController->createTypesMurals();
        break;
    case 'deleteTypes':
        $typesController->deleteTypes($params[1]);
        break;


    case 'editTechniquesForm':
        $typesController->showFormEdit($params[1]);
        break;
    case 'editTechnique':
        $typesController->editTechniques($params[1]);
        break;

        //ABM mural
    case 'deleteMuralsById':
        $muralsController->deleteMurals($params[1]);
        break;

    case 'addFormMural':
        $muralsController->showFormMurals();
        break;
    case 'addMurals':
        $muralsController->createNewMurals();
        break;


    case 'editMuralsForm':
        $muralsController->showMuralsEdit($params[1]);
        break;

    case 'editMural':
        $muralsController->muralsEdit($params[1]);
        break;

    default:
        header('Location: 404.php');
        break ;
}
