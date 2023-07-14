<?php

function Ajouter($nom, $prenom, $datenaissance, $ine, $filiere){

    if(require("connexion.php")){
        $req=$access->prepare("INSERT INTO etudiant (ine_etudiant,nom_etudiant,prenom_etudiant,date_naissance) VALUES ($ine,$nom,$prenom,$datenaissance)");
        $req->execute(array($ine,$nom,$prenom,$datenaissance));
        $req->closeCursor();
    }
}
function Supprimer($id){
    if(require("connexion.php")){
        $req=$access->prepare("DELETE * FROM etudaint WHERE id=?");

        $req->execute(array($id));
        $req->closeCursor();
    }
}
?>