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
    if (isset($_POST[""]) && isset($_POST[""]) && isset($_POST[""]) && isset($_POST[""])) {
        $title = userEntryProtection($_POST[""]);
        $text = userEntryProtection($_POST[""]);
        $user = (int) ($_POST[""]);
        $sections = [];
        foreach ($_POST[""] as $section) {
            array_push($sections, (int) $section);
        }
        thearticleInsert($db, $title, $text, $user, $sections);
    }


require_once "../view/adminView/adminInsertView.php";
    
    



    /**
     * Modification - crUd
     */
} elseif (isset($_GET['update'])) {


    /**
     * Suppression - cruD
     */
} elseif (isset($_GET['delete'])) {


    /**
     * Homepage - cRud
     */

    // pas de GET de routage    
} else {
    require_once "../view/adminView/adminHomepageView.php";
}
