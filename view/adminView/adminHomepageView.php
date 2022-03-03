<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Bootswatch: Lux</title>
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


  <div class="container mt-4">

    <div class="page-header" id="banner">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
          <h1>Gestion des articles</h1>

        </div>

      </div>
    </div>

  </div>

  <div class="container mt-4">
    <div class="bs-docs-section">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">

          </div>
        </div>
      </div>
    </div>

  </div>
  <?php
  //if (!empty($thearticle)){
  ?>
      <table>
        <thead>
          <tr>
              <th>idthearticle</th>
              <th>thearticletitle</th>
              <th>thearticletext</th>
              <th>thearticledate</th>
              <th>Modifier</th>
              <th>Supprimer</th>

          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($thearticletext as $thearticle) {
           ?>
            <tr> 
              <td><?= $thearticle["idthearticle"]?></td>
              <td><?= $thearticle["thearticletitle"]?></td>
              <td><?= $thearticle["thearticletext"]?></td>
              <td><?= $thearticle["thearticledate"]?></td>
              <td><?= $thearticle["thearticledesc"]?></td>
              <td><a href="./?update=<?= $thearticle["idthearticle"] ?>"></a>Modifier</td>
              <td><a href="./?delete=<?= $thearticle["idthearticle"] ?>"></a>>Supprimer</td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>

  

  <?php
   // }
  include '../view/footer.php';
  ?>