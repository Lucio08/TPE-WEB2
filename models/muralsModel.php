<?php
class MuralsModels
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=muralismo;charset=utf8', 'root', '');
  }

  function getAllMurals()
  {
    //abro conexion a la db


    //preparo consulta y la envio
    $query = $this->db->prepare('SELECT * FROM murales');
    $query->execute();

    //se obtiene la respuesta, como quiero todos los murales necesito un fetchAll
    $murals = $query->fetchAll(PDO::FETCH_OBJ);

    return $murals;
  }
  //FUNCION QUE ME TRAE  INFORMACION EXTRA DEL MURAL
  function getMuralsById($id)
  {

    $query = $this->db->prepare('SELECT * FROM murales JOIN tipos ON tipos.id_tipo = murales.id_tipo WHERE id_mural = ?');
    $query->execute([$id]);


    $mural = $query->fetch(PDO::FETCH_OBJ);

    return $mural;
  }
}
