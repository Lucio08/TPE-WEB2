<?php
include_once 'models/muralsModel.php';
include_once 'models/typesModel.php';
include_once 'views/muralsView.php';
include_once 'helpers/authHelper.php';




class MuralsControllers
{
    //Controlador que se encarga de coordinar todo lo referido a murales
    //atributos de las clases
    private $model;
    private $view;
    private $modelTypes;
    private $helper;

    public function __construct()
    {
        $this->model = new MuralsModels();
        $this->view = new MuralsViews();
        $this->modelTypes = new TypesModels();
        $this->helper = new AuthHelper();
    }

    function  showMurals()
    {
        //obtengo murales del modelo
        $murals = $this->model->getAllMurals();
        //actualizo la vista
        $this->view->showMurals($murals);
    }

    //trae el mural por id 
    function showMuralsById($id)
    {
        $muralsById = $this->model->getMuralsById($id);
        $this->view->showMuralsById($muralsById);
    }

    
    function listMuralsByTyps($id_tipo)
    {
        $title = $this->modelTypes->getOneTypes($id_tipo);
        $itemsByCategories = $this->model->getMuralsByTypes($id_tipo);
        $this->view->showMurals($itemsByCategories, $title);
    }

    function deleteMurals($id_mural)
    {
        $this->helper->checkLoggedIn();
        $this->model->deleteMuralById($id_mural);
        header("Location:" . BASE_URL . "home");
    }

    function showFormMurals()
    {
        $this->helper->checkLoggedIn();
        $techniques = $this->modelTypes->getTypes();
        $this->view->showFormsMurals($techniques);
    }

    function createNewMurals()
    {
        if (!empty($_POST['name-categories']) && !empty($_POST['name-murals']) && !empty($_POST['name-description']) && !empty($_POST['name-location']) && !empty($_POST['name-place']) && !empty($_POST['name-year'])) {
            $nameCategories = $_POST['name-categories'];
            $murals = $_POST['name-murals'];
            $description = $_POST['name-description'];
            $location = $_POST['name-location'];
            $place = $_POST['name-place'];
            $year = $_POST['name-year'];

            //cargo imagen y llama al modelo
            if ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") {
                $this->model->insertMural($nameCategories, $murals, $description, $location, $place, $year, $_FILES['input_name']['tmp_name']);
            } else {
                $this->model->insertMural($nameCategories, $murals, $description, $location, $place, $year);
            }
            header("Location:" . BASE_URL . "home");
        }
    }

    function showMuralsEdit($id_mural)
    {
        $this->helper->checkLoggedIn();

        $muralEdit = $this->model->getMuralsById($id_mural);
        $techniques = $this->modelTypes->getTypes();

        //trae la tecnica de un mural en especifico
        //$technique = $this->model->getMuralsById($muralEdit->id_tipo);
        $this->view->showEditMural($muralEdit, $techniques);
    }

    function muralsEdit($id_mural)
    {
        if (!empty($_POST['nameCategories']) && !empty($_POST['muralEdit']) && !empty($_POST['descriptionEdit']) && !empty($_POST['ubicacionEdit']) && !empty($_POST['lugarEdit']) && !empty($_POST['anuarioEdit'])) {
            $id_tipo = $_POST['nameCategories'];
            $nameMural = $_POST['muralEdit'];
            $description = $_POST['descriptionEdit'];
            $location = $_POST['ubicacionEdit'];
            $place = $_POST['lugarEdit'];
            $year = $_POST['anuarioEdit'];


            if ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png"){
                $this->model->updateMural($id_mural, $id_tipo, $nameMural, $description, $location, $place, $year, $_FILES['input_name']['tmp_name']);
            } else {
                $this->model->updateMural($id_mural, $id_tipo, $nameMural, $description, $location, $place, $year);
            }
            header("Location:" . BASE_URL . "home");
        }
    }
}
