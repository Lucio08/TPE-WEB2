<?php
require_once './libreria/smarty-4.2.1/libs/Smarty.class.php';

class MuralsViews
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
  }

  //la vista es independdiente a lo que le mande por parametro
  function showMurals($murals, $title = null)
  {
    session_start();
    /*
    asigno varibales que voy a usar en el template que tiene el valor de la variable que me trae
    el constructor
    */
    $this->smarty->assign('murales', $murals); 
    $this->smarty->assign('title', $title); 
    $this->smarty->display('templates/general/showMurals.tpl');
  }

  function showMuralsById($muralsById)
  {
    session_start();
    $this->smarty->assign('mural', $muralsById);
    $this->smarty->display('templates/murals/viewMural.tpl');
  }
  function showFormsMurals($techniques){ 
    $this->smarty->assign('techniques', $techniques);
    $this->smarty->display('templates/murals/formCreateMural.tpl');
  }

  function showEditMural($muralEdit, $techniques){
    $this->smarty->assign('mural', $muralEdit);
    $this->smarty->assign('nameCategories', $techniques);
    $this->smarty->display('templates/murals/formEditMural.tpl');
  }
}



