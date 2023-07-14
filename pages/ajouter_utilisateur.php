<?php

  require_once("connexion.php");
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $dateNaissance = $_POST['date_naissance'];
  $filliere = $_POST['filliere'];
  $ine = $_POST['ine'];


  $ps=$access->prepare("INSERT INTO etudiant (nom_etudiant, prenom_etudiant, date_naissance, id_filiere, ine_etudiant)
  VALUES (?, ?, ?, ?, ?)");
  $params=array($nom,$prenom,$dateNaissance,NULL,$ine);
  $ps->execute($params);
  header("location:GestionUsers.php");
?>