<?php
include_once 'models/typesModel.php';
include_once 'models/muralsModel.php';
include_once 'views/typesView.php';
include_once 'helpers/authHelper.php';

class TypesControllers
{
    //Controlador que se encarga de coordinar todo lo referido a tipos
    private $model;
    private $modelMurals;
    private $viewTypes;
    private $helper;

    public function __construct()
    {
        $this->model = new TypesModels();
        $this->modelMurals = new MuralsModels();
        $this->viewTypes = new TypesViews();
        $this->helper = new AuthHelper();
    }
    function types()
    {
        $types = $this->model->getTypes();
        $this->viewTypes->showTypes($types);
    }

    function showCreateForm()
    {   
        $this->helper->checkLoggedIn();
        $this->viewTypes->createForm();
    }


    function createTypesMurals()
    {
        if (!empty($_POST['input_techniques']) && !empty($_POST['input_materials']) && !empty($_POST['input_description'])&& !empty($_POST['input_history'])) {
            $techniques = $_POST['input_techniques'];
            $materials = $_POST['input_materials'];
            $description = $_POST['input_description'];
            $history = $_POST['input_history'];
            $this->model->insertTechniques($techniques, $materials, $description, $history);
            header("Location:" . BASE_URL . "techniques");
        } else {
            echo 'No Anda';
        }
    }

    function deleteTypes($id_tipo)
    {   
        
        $this->helper->checkLoggedIn();
        //llamo tecnica y me trae los murales de ese tipo
        $muralsByTypes =  $this->modelMurals->getMuralsByTypes($id_tipo);
        if(empty($muralsByTypes)){
            //si esa tecnia no tiene murales entonces llama al delete
            $this->model->deleteTypes($id_tipo);
            header("Location:" . BASE_URL . "techniques");
        }else{
            //sino errror
            $this->viewTypes->showError("Error, esta tecnica contiene murales");
        }
       
    }

    function showFormEdit($id_tipo)
    {   
        $this->helper->checkLoggedIn();
        $tipoEdit =  $this->model->getOneTypes($id_tipo);
        $this->viewTypes->showEditTypes($tipoEdit);
    }

    function editTechniques($id_tipo)
    {   
    
        if (!empty($_POST['idEdit']) && !empty($_POST['techniquesEdit']) && !empty($_POST['descriptionEdit']) && !empty($_POST['materialsEdit']) && !empty($_POST['historyEdit'])) {
            $id_tipo = $_POST['idEdit'];
            $techniques = $_POST['techniquesEdit'];
            $materials = $_POST['materialsEdit'];
            $description = $_POST['descriptionEdit'];
            $history = $_POST['historyEdit'];
            $this->model->updateTechniques($id_tipo, $techniques, $materials, $description, $history);
            header("Location:" . BASE_URL . "techniques");        
        }
       
    }
}
