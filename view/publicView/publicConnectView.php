<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
</head>
<body>
                   <div>
                        <a class="nav-link" href="?connect">Connexion</a>
</div>
                    
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

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js"></script>
</body>

</html>
