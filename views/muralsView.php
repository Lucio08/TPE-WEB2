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
    $this->smarty->assign('murales', $murals);
    $this->smarty->display('templates/showMurals.tpl');
    }
   
    function showMuralsById($muralsById)
  {
    $this->smarty->assign('mural', $muralsById);
    $this->smarty->display('templates/viewMural.tpl');
  }
 
  }
  

