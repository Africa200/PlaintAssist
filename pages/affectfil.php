<?php
    require_once("connexion.php");
    $idteach=$_GET['id'];
    $ps=$access->prepare("SELECT * FROM filiere");
    $ps->execute();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des filières</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    main {
      flex: 1;
    }
  </style>
</head>
<body>
  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Mon Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="userInterface.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Déconnexion</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenu principal -->
  <main class="container py-4">
    <h1>Gestion des filières</h1>    
    <div class="row">
      <div class="col-md-12">
        <h2>Liste des filières</h2>
        <table class="table">
          <thead>
            <th>ID</th><th>Intituler</th><th>Abreviation</th>
          </thead>
          <tbody>
            <?php while ($fil=$ps->fetch()){ ?>
            <tr>
            <td> <?php echo($fil['id_filiere']) ?> </td>
            <td> <?php echo($fil['intitule_filiere']) ?> </td>
            <td><?php echo($fil['abreviation']) ?> </td>
            <td> 
              <a type="button" class="btn btn-primary btn-sm mr-2" href="affectfilaction.php?id=<?php echo($fil['id_filiere']) ?>.'&'.idfil=<?php echo($idteach) ?>" >affect</a>
              </td>
            </tr> 
            <?php }?>
          </tbody>
        </table>
        <div class="text-right mt-3">
        </div>
      </div>
    </div>

    <!-- Ajoute ici le contenu spécifique à la gestion des filières -->

  </main>

  <!-- Pied de page -->
  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <p>Tous droits réservés &copy; 2023</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
