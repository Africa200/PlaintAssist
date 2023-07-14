<?php

  require_once("connexion.php");
  session_start();
  if (isset($_SESSION['PROFILE']) && isset($_SESSION['PROFILE']['id_user'])) {
    // Récupérez l'id de l'utilisateur à partir de la variable de session
  $id_user = $_SESSION['PROFILE']['id_user'];

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $ine = $_POST['ine'];
  $desc = $_POST['desc'];


  $ps=$access->prepare("INSERT INTO plainte (attestation,description,email,ine,categorie_plainte,id_user)
  VALUES (?, ?, ?, ?, ?,?)");
  $params=array(NULL,$desc,$email,$ine,NULL,$id_user);
  $ps->execute($params);
  header("location:confirm.php");
  }
?>