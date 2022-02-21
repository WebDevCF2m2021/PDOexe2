<?php

/**
 * Public's Menu 
 */
$sections = theSectionSelectAllNav($db);

/**
 * Public Connexion
 */


if (isset($_GET['connect'])) {
    if (isset($_POST["theuserLogin"]) && isset($_POST["theuserPwd"]) && $_POST["theuserLogin"] === ADMIN_LOG && $_POST["theuserPwd"] === ADMIN_PWD) {
        $_SESSION["id"] = session_id();
        header("Location: ./");
    } else {
        require_once "../view/publicView/publicConnectView.php";
    }
}
/*Créer un routing publique quand la variable GET idauteur existe*/
elseif (isset($_GET['idauteur'])) {

    require_once "../model/theuserModel.php"
}

    

    /**
     * Public Homepage
     */
 else {
    $articles = thearticleSelectAll($db);
    require_once "../view/publicView/publicHomepageView.php";
}
