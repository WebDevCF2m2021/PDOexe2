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

    <form method="POST">
        <div>
            <label for='thearticletitle'></label>
            <input type='text' name='thearticletitle' id='thearticletitle'>
        </div>
        <div>
            <label for='thearticletext'></label>
            <input type='number' name='thearticletext' id='thearticletext'>
        </div>
        <div>
            <label for="theuser_idtheuser">Écrit par:</label>
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
        <div>
            <label>Sections : </label><br>
            <?php
            foreach ($sections as $section) {
            ?>
                <div>
                    <input type="checkbox" id="sectionNumber<?= $section['idthesection'] ?>" name="idthesection[]" value="<?= $section['idthesection'] ?>">
                    <label for="sectionNumber<?= $section['idthesection'] ?>"><?= $section['thesectionTitle'] ?></label>
                </div>
            <?php
            }
            ?>
        </div>
        <button type='submit'>Submit</button>
    </form>
    <?php include_once "../view/footer.php" ?>