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
require_once "../model/theuserModel.php";

/**
 * Co
 * Nous ne sommes pas connectés
 */




//var_dump(theuserSelectAll($db));


//var_dump($test);


/**
 * Routeur
 */



require_once "../controller/" . (isset($_SESSION["id"]) && $_SESSION["id"] === session_id() ? "admin" : "public") . "ThearticleController.php";
