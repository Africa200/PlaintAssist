
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/style.css">

    
      </head>
<body>   
    <div class="container col-md-4 spacer">
        <div class="card">
            <div class="card-header">Inscription</div>
        <div class="card-body">
        <form action="createaccount.php" method="post">
            <div class="group-form">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="group-form">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
            <div class="group-form">
                <label for="ine">INE:</label>
                <input type="text" name="ine" id="ine" class="form-control">
            </div>

            <div class="group-form">
                <label for="ine">date de naissance:</label>
                <input type="date" name="date" id="date" class="form-control">
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
            <br>
            <div class="group-form text-center">
                <button class="btn btn-info" type="submit">Creer mon compte</button>
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>
