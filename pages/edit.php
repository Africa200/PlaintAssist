<?php    
    require_once("connexion.php");
    $id= $_GET['id'];
    $ps=$access->prepare("SELECT * FROM etudiant WHERE id=?");
    $params=array($id);
    $ps->execute($params);
    $user=$ps->fetch();

?>

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
    <h1 class="text-center mb-4">Ajouter un utilisateur</h1>

    <form action="editaction.php" method="post">
          
      <div class="form-group" hidden>
        <label for="nom">ID :</label>
        <input type="text" class="form-control" id="id" name="id" value="<?php echo($user['id']) ?>" >
      </div>
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo($user['nom_etudiant']) ?>" >
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo($user['prenom_etudiant']) ?>">
      </div>
      <div class="form-group">
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="<?php echo($user['date_naissance']) ?>">
      </div>
      <div class="form-group">
        <label for="filliere">Filière :</label>
        <select class="form-control" id="filliere" name="filliere" required>
          <option value="Informatique">Informatique</option>
          <option value="Génie civil">Génie civil</option>
          <option value="Électronique">Électronique</option>
          <!-- Ajoute ici d'autres options pour les filières -->
        </select>
      </div>
      <div class="form-group">
        <label for="ine">INE :</label>
        <input type="text" class="form-control" id="ine" name="ine" value="<?php echo($user['ine_etudiant']) ?>">
      </div>
      <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
