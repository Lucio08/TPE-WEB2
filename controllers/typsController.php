<?php
include_once 'models/typsModel.php';
include_once 'views/muralsView.php';

class TypsControllers
{
    //Controlador que se encarga de coordinar todo lo referido a tipos
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new TypsModels();
        $this->view = new MuralsViews();
    }

    function searchByTyps($id){
        $itemsByCategories = $this->model->getMuralsByTyps($id);
         $this->view->showMurals($itemsByCategories);
    }

}
