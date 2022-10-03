<?php
class TypsModels
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=muralismo;charset=utf8', 'root', '');
  }
  //obtiene los datos de la base que se refieren a los tipos de mural

  function getTypes(){
    $query = $this->db->prepare('SELECT * FROM tipos');
    $query->execute();
    $types = $query->fetchAll(PDO::FETCH_OBJ);
    return $types;
  }



 function insertTechniques ($techniques, $materials, $description, $history){
    $sentencia = $this->db->prepare("INSERT INTO `tipos`(`tecnica`,`materiales`,`tecnicaDescripcion`,`historia`) VALUES (?,?,?,?)");
    $sentencia->execute(array($techniques, $materials, $description, $history));
    echo "Tecnica  agregada exitosamente";
}

}