<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DetailArticle</title>
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
          <a class="nav-link active" href="#">Home
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
    <?php
    if (empty($article)) :
    ?>
      <div class="row">
        <div class="col-lg-12">
          <h2>Error 404</h2>
          <hr>
        </div>
      </div>
  </div>
<?php
    else :
?>




  <div class="container mx-30">

    <h2><?= $article["thearticletitle"] ?></h2>
    <p><?= nl2br($article["thearticletext"]) ?></p>
    <p> <a href="?idauteur=<?= $article["idtheuser"] ?>"><?= $article["theusername"] ?></a></p>
    <p><?= $article["thearticledate"] ?></p>
    <p>
      <?php
      $artExp = explode("|||", $article["thesectiontitle"]);
      $idExp = explode(",", $article["idthesection"]);
      foreach ($artExp as $key => $value) {
      ?>
        <a href="?idsection=<?= $idExp[$key] ?>"><?= $value ?></a>
      <?php
      }
      ?>
    </p>
  </div>
<?php
    endif;

    include '../view/footer.php';
?>