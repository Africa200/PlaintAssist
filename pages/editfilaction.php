<?php

  require_once("connexion.php");
  $id = $_POST['id'];
  $int = $_POST['int'];
  $abv = $_POST['abv'];


  $ps=$access->prepare("UPDATE filiere SET intitule_filiere=?, abreviation=? WHERE id_filiere =?");
  $params=array($int,$abv,$id);
  $ps->execute($params);
  header("location:GestionFilliere.php");
?>