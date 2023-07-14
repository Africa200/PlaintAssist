<?php

  require_once("connexion.php");
  $int = $_POST['int'];
  $abv = $_POST['abv'];
 

  $ps=$access->prepare("INSERT INTO filiere (intitule_filiere, abreviation)
  VALUES (?, ?)");
  $params=array($int,$abv);
  $ps->execute($params);
  header("location:GestionFilliere.php");
?>