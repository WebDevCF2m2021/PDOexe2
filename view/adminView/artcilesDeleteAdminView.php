<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin : Suppression de l'article</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <li class="nav-item">
          <a class="nav-link" href="?add">Créer un nouvel article</a>
        </li>

      </ul>
      <ul class="navbar-nav ms-md-auto">

        <li class="nav-item">
          <a rel="noopener" class="nav-link" href="?disconnect"> Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>


  <div class="container">

<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-12 mx-auto">

            <h1>Administration: Suppression de l'article</h1>
            <p class="lead">Bienvenue <?= $_SESSION['theuserName'] ?>, vous êtes connectés en tant que <?= $_SESSION['therightName'] ?></p>

            <hr>

            <h3>Titre de l'article : <?= $article["thearticleTitle"] ?></h3>
            <p><?= cuteTheText($article["thearticleText"], 500); ?></p>
            <div class="alert alert-danger" role="alert">
                Voulez-vous vraiment supprimer cette article ? <a href="?p=article&delete=<?= $article["idthearticle"] ?>&confirm">OUI</a> | <a href="?p=article">NON</a>
            </div>
           
        </div>

    </div>
</div>
 
  <?php
  include '../view/footer.php';
  ?>