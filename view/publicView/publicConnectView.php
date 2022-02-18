<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
</head>

<body>
<div class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
      <a href="./" class="navbar-brand">Accueil</a>
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Section</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ms-md-auto">
</div>

   </div>
  <div class="container mt-4">

    <p class="lead">Veuillez vous connecter</p>

    <hr>
    <div>
        <?php
        if (isset($error)) :
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php
        endif;
        ?>
        <form action="" name="connexion" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Votre login</label>
                <input type="text" name="theuserLogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Votre mot de passe</label>
                <input type="password" name="theuserPwd" class="form-control" id="exampleInputPassword1" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>

    </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>