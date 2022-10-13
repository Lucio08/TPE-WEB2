<?php
require_once './libreria/smarty-4.2.1/libs/Smarty.class.php';
class TypesViews
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showTypes($types)
    {   
        session_start();    
        $this->smarty->assign('types', $types);
        
        $this->smarty->display('templates/techniques/techniques.tpl');
    }

    function createForm()
    {   
        $this->smarty->display('templates/techniques/formCreateTechniques.tpl');
    }

    
    function showEditTypes($tipo){
        $this->smarty->assign('tipo', $tipo);
        $this->smarty->display('templates/techniques/formTechniques.tpl');
    }
     function showError($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/general/msgError.tpl');
     }
}
