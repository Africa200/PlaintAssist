<?php

  require_once("connexion.php");
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $dateNaissance = $_POST['date_naissance'];
  $filliere = $_POST['filliere'];
  $ine = $_POST['ine'];
  $id= $_POST['id'];


  $ps=$access->prepare("UPDATE etudiant SET nom_etudiant=?, prenom_etudiant=?, date_naissance=? , id_filiere=? , ine_etudiant=? WHERE id=?");
  $params=array($nom,$prenom,$dateNaissance,NULL,$ine,$id);
  $ps->execute($params);
  header("location:GestionUsers.php");
?>