<?php

  require_once("connexion.php");
  $id= $_GET['id'];

  $ps=$access->prepare("DELETE FROM filiere WHERE id_filiere =?");
  $params=array($id);
  $ps->execute($params);
  header("location:GestionFilliere.php");
?>