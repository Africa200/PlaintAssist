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
    <h1 class="text-center mb-4">PlainteAssist</h1>

    <form action="soumettre.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
      </div>
      <div class="form-group">
        <label for="ine">INE :</label>
        <input type="text" class="form-control" id="ine" name="ine" required>
      </div>

      <div class="form-group">
        <label for="email">Adresse mail :</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
<!--
      <div class="form-group">
        <label for="date_naissance">Attestation d'inscription :</label>
        <input type="file" class="form-control" id="file" name="file" required>
      </div>
-->
      <div class="form-group">
        <label for="desc">description du problème :</label>
        <input type="text" class="form-control" id="desc" name="desc" required>
      </div>

      <button type="submit" class="btn btn-primary">Soumettre ma plainte</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
