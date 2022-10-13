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

  function getMuralsByTypes($id)
  {
    $query = $this->db->prepare('SELECT * FROM murales WHERE id_tipo = ?');
    $query->execute([$id]);
    $muralByCategories = $query->fetchAll(PDO::FETCH_OBJ);
    return $muralByCategories;
  }


  function deleteMuralById($id_mural)
  {
    $query = $this->db->prepare('DELETE FROM murales WHERE id_mural = ?');
    $query->execute([$id_mural]);
  }

  function insertMural($nameCategories, $murals, $description, $location, $place, $year, $img)
  {
    $query = $this->db->prepare('INSERT INTO `murales`(`id_tipo`,`nombre`,`descripcion`,`ubicacion`, `lugar`, `anuario`,`imagen`) VALUES (?,?,?,?,?,?,?)');
    $query->execute(array($nameCategories, $murals, $description, $location, $place, $year, $img));
    return $this->db->lastInsertId();
  }

  function getOneMural($id_mural)
  {
    $query = $this->db->prepare('SELECT * FROM murales where id_mural = ?');
    $query->execute(array($id_mural));

    $mural = $query->fetch(PDO::FETCH_OBJ);
    return $mural;
  }

  function updateMural($id_mural,$id_tipo, $nameMural, $description, $location, $place, $year, $img)
  { 
    $query = $this->db->prepare('UPDATE murales SET id_tipo=?, nombre=?, descripcion=?,ubicacion=?, lugar=?, anuario=?, imagen=? WHERE id_mural=?');
    $query->execute(array($id_tipo, $nameMural, $description, $location, $place, $year, $img, $id_mural));
  }
}
