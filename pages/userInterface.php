<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Application</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
          <a class="nav-link" href="#">Accueil</a>
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

  <!-- En-tête -->
  <header class="bg-primary text-white text-center py-5">
    <h1>Bienvenue dans mon application</h1>
  </header>

  <!-- Contenu principal -->
  <main class="container py-4">
    <div class="row">
      <div class="col-md-6">
        <h2>Gestion des utilisateurs</h2>
        <p>Cette section permet de gérer les utilisateurs de l'application. Tu peux ajouter, modifier ou supprimer des utilisateurs, ainsi que gérer leurs autorisations.</p>
        <a href="GestionUsers.php" class="btn btn-primary">Gestion Users</a>
      </div>
      <div class="col-md-6">
        <h2>Gestion des filières</h2>
        <p>Cette section permet de gérer les filières de l'application. Tu peux créer de nouvelles filières, modifier les informations des filières existantes et supprimer des filières.</p>
        <a href="GestionFilliere.php" class="btn btn-primary">Gestion des filliere</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h2>Deposer une plainte</h2>
        <p>Cette section permet de gérer les modules de l'application. Tu peux ajouter, modifier ou supprimer des modules, ainsi que les associer aux filières correspondantes.</p>
        <a href="formulaireplainte.php" class="btn btn-primary">Gestion des module</a>
      </div>
      <div class="col-md-6">
        <h2>Gestion des résultats</h2>
        <p>Cette section permet de gérer les résultats des étudiants. Tu peux consulter les résultats par module, par étudiant ou effectuer des opérations de traitement des résultats.</p>
        <a href="#" class="btn btn-primary">Consulter les résultats</a>
      </div>
    </div>
    
  </main>

  <!-- Pied de page -->
  <footer class="bg-dark text-white text-center py-3">
    <p>Tous droits réservés &copy; 2023</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
