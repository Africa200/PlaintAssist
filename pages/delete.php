<?php

  require_once("connexion.php");
  $id= $_GET['id'];

  $ps=$access->prepare("DELETE FROM etudiant WHERE id=?");
  $params=array($id);
  $ps->execute($params);
  header("location:GestionUsers.php");
?>