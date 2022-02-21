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
