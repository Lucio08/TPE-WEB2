<?php

class TypesViews{

    private $smarty;

function __construct(){
    $this->smarty = new Smarty();
}

    function showTypes($types){
        $this->smarty->assign('types', $types);
        $this->smarty->display('techniques.tpl');
    }

    function createForm(){
        $this->smarty->display('formCreateTechniques.tpl');
    }
}
