<?php
include_once 'models/typsModel.php';
include_once 'views/typesView.php';

class TypsControllers
{
    //Controlador que se encarga de coordinar todo lo referido a tipos
    private $model;
    private $viewTyps;

    function __construct()
    {
        $this->model = new TypsModels();
        $this->viewTyps = new TypesViews();
    }
    function types()
    {
        $types = $this->model->getTypes();
        $this->viewTyps->showTypes($types);
    }

    function createTypesMurals()
    {
        if (empty($_POST)) {
            $this->viewTyps->createForm();
            return;
        } else if (!empty($_POST['input_techniques'] && $_POST['input_materials'] && $_POST['input_description'] && $_POST['input_history'])) {
            $techniques = $_POST['input_techniques'];
            $materials = $_POST['input_materials'];
            $description = $_POST['input_description'];
            $history = $_POST['input_history'];

            $this->model->insertTechniques($techniques, $materials, $description, $history);
        }   
            
            header("Location:" .BASE_URL. "home");
    }
    /*if (!isset($_POST['tecnica'] && $_POST['materiales'] && $_POST['tecnicaDescripcion'] && $_POST['historia'])) {
            $tecnica = $_POST['tecnica'];
            $materiales = $_POST['materiales'];
            $tecnicaDescripcion = $_POST['tecnicaDescripcion'];
            $historia = $_POST['historia'];
            $this->model->insertTechniques($tecnica,$materiales,$tecnicaDescripcion,$historia);*/
}
