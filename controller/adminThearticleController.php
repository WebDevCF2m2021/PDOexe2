<?php
if ($_SESSION["id"] !== session_id() || isset($_GET["disconnect"])) {
    disconnect();
    header("Location: ./");
    exit();
}
/**
 * Routeur de l'admin
 */

/**
 * Ajout - Crud
 */
if (isset($_GET['add'])) {
    /* A remplir quand j'aurais les champs de la vue */
    if (isset($_POST["thearticletitle"]) && isset($_POST["thearticletext"]) && isset($_POST["theuser_idtheuser"]) && isset($_POST["idthesection"])) {
        $title = userEntryProtection($_POST["thearticletitle"]);
        $text = userEntryProtection($_POST["thearticletext"]);
        $user = (int) ($_POST["theuser_idtheuser"]);
        $sections = [];
        foreach ($_POST["idthesection"] as $section) {
            array_push($sections, (int) $section);
        }
        if (thearticleInsert($db, $title, $text, $user, $sections)) {
            header("Location: ./");
        }
    }

    $users = theuserSelectAll($db);
    $sections = theSectionSelectAllNav($db);
    require_once "../view/adminView/adminInsertView.php";

    /**
     * Modification - crUd
     */
} elseif (isset($_GET['update'])) {


    /**
     * Suppression - cruD
     */
} elseif (isset($_GET['delete']) && ctype_digit($_GET["delete"]) && !empty($_GET["delete"])) {

    $idarticle = (int) $_GET["delete"];

    // si on a cliqué sur "confirmation"
    if (isset($_GET['confirm'])) {
        if (thearticleAdminDeleteById($db, $idarticle)) {
            header("Location: ./");
            exit();
        }
    }

    $article = thearticleSelectOneById($db, $idarticle);

    require_once "../view/adminView/articlesDeleteAdminView.php";


    /**
     * Homepage - cRud
     */

    // pas de GET de routage    
} else {
    $thearticleAll = thearticleAdminSelectAll($db);
    require_once "../view/adminView/adminHomepageView.php";
}
