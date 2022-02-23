<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Homepage</title>
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
      <ul class="navbar-nav ms-md-auto">

        <li class="nav-item">
          <a rel="noopener" class="nav-link" href="?connect"> Connexion</a>
        </li>
      </ul>
    </div>
  </div>


  <div class="container mt-4">

    <div class="page-header" id="banner">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
          <h1>Articles de notre site</h1>

        </div>

      </div>
    </div>

  </div>

  <div class="container mt-4">

    <div class="row">
      <div class="col-lg-12">
        <h2>Nombre d'articles : <?= count($articles) ?></h2>
        <hr>
      </div>
    </div>
  </div>
  <div class="container mx-30">
    <?php
    //var_dump($articles);
    foreach ($articles as $article) {
    ?>
      <h2><?= $article["thearticletitle"] ?></h2>
      <p><?= $article["thearticletext"] ?> <a href="?idarticle=<?= $article["idthearticle"] ?>">Lire la suite</a></p>
      <p> <a href="?idauteur=<?= $article["idtheuser"] ?>"><?= $article["theusername"] ?></a></p>
      <p><?= $article["thearticledate"] ?></p>
      <p><?= $article["thesectiontitle"] ?></p>
    <?php
    }
    ?>
  </div>

  <?php
  include '../view/footer.php';
  ?>