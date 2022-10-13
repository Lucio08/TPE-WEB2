<?php
class TypesModels
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=muralismo;charset=utf8', 'root', '');
  }
  //obtiene los datos de la base que se refieren a los tipos de mural

  function getTypes()
  {
    $query = $this->db->prepare('SELECT * FROM tipos');
    $query->execute();
    $types = $query->fetchAll(PDO::FETCH_OBJ);
    return $types;
  }


  function insertTechniques($techniques, $materials, $description, $history)
  {
    $sentencia = $this->db->prepare('INSERT INTO `tipos`(`tecnica`,`materiales`,`tecnicaDescripcion`,`historia`) VALUES (?,?,?,?)');
    $sentencia->execute(array($techniques, $materials, $description, $history));
    return $this->db->lastInsertId();
  }

  function getNameTechniques($id){
    $query = $this->db->prepare('SELECT tecnica FROM tipos WHERE id_tipo = ?');
    $query->execute(array($id));
    $muralsTechnique = $query->fetch(PDO::FETCH_OBJ);
    return $muralsTechnique;
  }
  
  function deleteTypes($id_tipo)
  {
    $sentencia = $this->db->prepare('DELETE FROM tipos WHERE id_tipo=?');
    $sentencia->execute(array($id_tipo));
  }

  function getOneTypes($id_tipo){
    $query = $this->db->prepare('SELECT * FROM tipos where id_tipo = ?');
    $query->execute(array($id_tipo));

    $type = $query->fetch(PDO::FETCH_OBJ);
    return $type;
  }

  function updateTechniques($id_tipo, $techniques, $materials, $description, $history)
  {
    $query = $this->db->prepare("UPDATE tipos SET tecnica=?, materiales=?,tecnicaDescripcion=?,historia=? WHERE id_tipo=?");
    $query->execute(array($techniques, $materials, $description, $history,$id_tipo));
  }

 
}
