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
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown show">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Section</a>
          <div class="dropdown-menu" aria-labelledby="themes">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something </a>
            <a class="dropdown-item" href="#">1</a>
            <a class="dropdown-item" href="#">2</a>
            <a class="dropdown-item" href="#">3</a>
            <a class="dropdown-item" href="#">4</a>
            <a class="dropdown-item" href="#">5</a>
            <a class="dropdown-item" href="#">6</a>
            <a class="dropdown-item" href="#">7</a>
            <a class="dropdown-item" href="#">8</a>
            <a class="dropdown-item" href="#">9</a>
            <a class="dropdown-item" href="#">10</a>
            <a class="dropdown-item" href="#">11</a>
            <a class="dropdown-item" href="#">12</a>
            <a class="dropdown-item" href="#">13</a>
            <a class="dropdown-item" href="#">14</a>
            <a class="dropdown-item" href="#">15</a>
            <a class="dropdown-item" href="#">16</a>
            <a class="dropdown-item" href="#">17</a>
            <a class="dropdown-item" href="#">18</a>
            <a class="dropdown-item" href="#">19</a>
            <a class="dropdown-item" href="#">20</a>
            <a class="dropdown-item" href="#">21</a>
            <a class="dropdown-item" href="#">22</a>
            <a class="dropdown-item" href="#">23</a>
            <a class="dropdown-item" href="#">24</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ms-md-auto">


      </ul>
    </div>
  </div>





  <br>
  <p class="container">Veuillez vous connecter</p>
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