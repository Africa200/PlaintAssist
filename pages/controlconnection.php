<?php
    require_once("connexion.php");
    $email= $_POST['email'];
    $password= $_POST['pass'];

    $ps=$access->prepare("SELECT * FROM user WHERE email=? AND password =?");
    $params=array($email,$password);
    $ps->execute($params);

    if($user=$ps->fetch()){
        session_start();
        $_SESSION['PROFILE']=$user;
        if($_SESSION['PROFILE']['role']=="ADMIN"){
            header("location:GestionUsers.php");
        }else{
            header("location:userInterface.php");
        }
       
    }else{
        header("location:login.php");
    }
?>