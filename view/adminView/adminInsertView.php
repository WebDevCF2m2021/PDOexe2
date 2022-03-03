<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bootswatch: Lux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 mx-auto'>
                <form method='POST' class='p-4 rounded-3'>
                    <div class='mb-3'>
                        <label class='form-label' for='thearticletitle'>Titre:</label>
                        <input class='form-control' type='text' name='thearticletitle' id='thearticletitle'>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label' for='thearticletext'>Texte:</label>
                        <textarea class='form-control' type='textarea' name='thearticletext' id='thearticletext' rows="3"></textarea>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label' for="theuser_idtheuser">Écrit par:</label>
                        <select id="theuser_idtheuser" name="theuser_idtheuser">
                            <?php
                            foreach ($users as $user) {
                            ?>
                                <option value="<?= $user["idtheuser"] ?>"><?= $user["theuserName"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class='mb-3'>
                        <label>Sections : </label><br>
                        <?php
                        foreach ($sections as $section) {
                        ?>
                            <div class='form-check form-check-inline'>

                                <input class='form-check-input' type="checkbox" id="sectionNumber<?= $section['idthesection'] ?>" name="idthesection[]" value="<?= $section['idthesection'] ?>">
                                <label class='form-label' for="sectionNumber<?= $section['idthesection'] ?>"><?= $section['thesectiontitle'] ?></label>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <button type='submit' class='btn btn-primary'>Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once "../view/footer.php" ?>