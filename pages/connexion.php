<?php
//Constant d'environement
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "gestionplainte");

//DNS de connexion
$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

try {

    $access = new PDO($dsn, DBUSER, DBPASS);

    $access->exec("SET NAME utf8");
    $access->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo "<h2>Connexion a la base de donnee etablis avec success</h2>";
} catch (PDOException $e) {
    die("Erreur:".$e->getMessage());
}

?>