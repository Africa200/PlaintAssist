<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un utilisateur</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    .card {
      max-width: 400px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="card">
    <!-- Contenu principal -->
    <h1 class="text-center mb-4">Ajouter une filiere</h1>

    <form action="addfilaction.php" method="post">
      <div class="form-group">
        <label for="nom">Intitulé :</label>
        <input type="text" class="form-control" id="int" name="int" required>
      </div>
      <div class="form-group">
        <label for="prenom">Abreviation :</label>
        <input type="text" class="form-control" id="abv" name="abv" required>
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
