<?php
include_once 'models/muralsModel.php';
include_once 'views/muralsView.php';

class MuralsControllers
{
    //Controlador que se encarga de coordinar todo lo referido a murales
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new MuralsModels();
        $this->view = new MuralsViews();
    }

    function  showMurals()
    {
        //obtengo murales del modelo
        $murals = $this->model->getAllMurals();
        //actualizo la vista
        $this->view->showMurals($murals);

    }

    function showMuralsById($id){
        
        $muralsById = $this->model->getMuralsById($id);
        $this->view->showMuralsById($muralsById);
    }

    
   
}
