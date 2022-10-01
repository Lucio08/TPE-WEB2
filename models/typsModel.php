<?php
class TypsModels
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=muralismo;charset=utf8', 'root', '');
  }
  //obtiene los datos de la base que se refieren a los tipos de mural

  function getMuralsByTyps($id)
  {

    $query = $this->db->prepare('SELECT * FROM murales WHERE id_tipo = ?');
    $query->execute([$id]);


    $muralByCategories = $query->fetchAll(PDO::FETCH_OBJ);

    return $muralByCategories;
  }
}
