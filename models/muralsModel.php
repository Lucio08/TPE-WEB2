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

  function insertMural($nameCategories, $murals, $description, $location, $place, $year, $img = null)
  {
    $pathImg = null;
    // si imagen es diferente de null
    if ($img) {
      $pathImg = $this->uploadImage($img); //genera archivo temporal en la carpeta images/murals y retorna la ruta

      $query = $this->db->prepare('INSERT INTO `murales`(`id_tipo`,`nombre`,`descripcion`,`ubicacion`, `lugar`, `anuario`,`imagen`) VALUES (?,?,?,?,?,?,?)');
      $query->execute([$nameCategories, $murals, $description, $location, $place, $year,  $pathImg]);
      return $this->db->lastInsertId();
    }else{
      $query = $this->db->prepare('INSERT INTO `murales`(`id_tipo`,`nombre`,`descripcion`,`ubicacion`, `lugar`, `anuario`) VALUES (?,?,?,?,?,?)');
      $query->execute([$nameCategories, $murals, $description, $location, $place, $year]);
      return $this->db->lastInsertId();
    }
  }

 private function uploadImage($img)
  {
    $target = 'images/murals/' . uniqid() . '.jpg'; //  le da un nombre unico a la imagen
    move_uploaded_file($img, $target); /// mueve  los archivos temporales a la carpeta de las imagenes
    return $target;
  }

  function getOneMural($id_mural)
  {
    $query = $this->db->prepare('SELECT * FROM murales where id_mural = ?');
    $query->execute(array($id_mural));

    $mural = $query->fetch(PDO::FETCH_OBJ);
    return $mural;
  }

  function updateMural($id_mural, $id_tipo, $nameMural, $description, $location, $place, $year, $img = null)
  {
    $pathImg = null;
    if ($img) {
      $pathImg = $this->uploadImage($img);
      $query = $this->db->prepare('UPDATE murales SET id_tipo=?, nombre=?, descripcion=?,ubicacion=?, lugar=?, anuario=?, imagen=? WHERE id_mural=?');
      $query->execute(array($id_tipo, $nameMural, $description, $location, $place, $year, $pathImg, $id_mural));
    } else {
      $query = $this->db->prepare('UPDATE murales SET id_tipo=?, nombre=?, descripcion=?,ubicacion=?, lugar=?, anuario=?  WHERE id_mural=?');
      $query->execute(array($id_tipo, $nameMural, $description, $location, $place, $year, $id_mural)) ;
    }
  }
}
