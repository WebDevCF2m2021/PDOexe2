<?php


/**
 * Public Homepage
 */
$sections = theSectionSelectAllNav($db);

var_dump ($sections);

//require_once "../view/publicView/publicHomepageView.php";

if (isset($_GET['connect'])) {
    require_once "../view/publicView/publicConnectView.php";}

else {
    require_once "../view/publicView/publicHomepageView.php";
    }

