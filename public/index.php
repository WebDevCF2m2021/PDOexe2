<?php
session_start();
/**
 * Chargement des dépendances
 */
require_once "../config.php";
require_once "../model/theuserModel.php";
require_once "../model/connectionModel.php";
require_once "../model/theSectionModel.php";
require_once "../model/theArticleModel.php";


/**
 * Connexion PDO
 */
try {
    $db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT . ';charset=' . DB_CHARSET, DB_LOGIN, DB_PWD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Code erreur : " . $e->getCode();
    echo "<br>Message d'erreur : " . $e->getMessage();
}


//var_dump(theSectionSelectAllNav($db));

//var_dump(theuserSelectAll($db));

//var_dump(thearticleSelectAll($db));


/**
 * Routeur
 */



require_once "../controller/" . (isset($_SESSION["id"]) && $_SESSION["id"] === session_id() ? "admin" : "public") . "ThearticleController.php";
