<?php
/**
 * Routeur de l'admin
 */


/**
 * Ajout - Crud
 */
if (isset($_GET['add'])) {

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



}