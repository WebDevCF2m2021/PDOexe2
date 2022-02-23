 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.min.css">
</head>

<body>

  <div class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
      <a href="./" class="navbar-brand">Accueil</a>
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown show">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Section</a>
          <div class="dropdown-menu" aria-labelledby="themes">
            <?php
            foreach ($sections as $section) {
            ?>
              <a class="dropdown-item" href="?idsection=<?= $section['idthesection'] ?>"><?= $section['thesectiontitle'] ?></a>
            <?php
            }
            ?>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>





  <br>
  <p class="container h1">Veuillez vous connecter</p>
  <div class="container">
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
        <small id="emailHelp" class="form-text text-muted">Login incorrect</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Votre mot de passe</label>
        <input type="password" name="theuserPwd" class="form-control" id="exampleInputPassword1" required>
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
  </div>

  </div>

  </div>
  </div>

  <?php
  include '../view/footer.php';
  ?>