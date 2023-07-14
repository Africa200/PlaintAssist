
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
            <div class="card-header">Connection</div>
        <div class="card-body">
        <form action="controlconnection.php" method="post">
            <div class="group-form">
                <label for="email">email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="group-form">
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <br>
            <div class="group-form text-center">
                <button class="btn btn-info" type="submit">Se connecter</button>
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>
