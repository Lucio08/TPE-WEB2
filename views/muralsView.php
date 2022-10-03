<?php
require_once './libreria/smarty-4.2.1/libs/Smarty.class.php';

class MuralsViews
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
  }
  function showMurals($murals)
  {
    /*
    asigno varibales que voy a usar en el template que tiene el valor de la variable que me trae
    el constructor
    */

    $this->smarty->assign('murales', $murals);
    $this->smarty->display('templates/showMurals.tpl');
  }

  function showMuralsById($muralsById)
  {
    $this->smarty->assign('mural', $muralsById);
    $this->smarty->display('templates/viewMural.tpl');
  }

  function showMuralsByCategories($itemsByCategories){
    $this->smarty->assign('muralC', $itemsByCategories);
    $this->smarty->display('techniques.tpl');
}
 /* function showAddMural(){
    $this->
  }*/
}
