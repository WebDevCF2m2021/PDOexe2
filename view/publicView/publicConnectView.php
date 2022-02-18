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
                        <a class="nav-link" href="?connect"><h1>Connexion</h1></a>
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

