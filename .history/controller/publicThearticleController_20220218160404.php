<?php


/**
 * Public Homepage
 */


//require_once "../view/publicView/publicHomepageView.php";

if (isset($_GET['connect'])) {
    require_once "../view/publicView/publicConnectView.php";}
d
else {
    require_once "../view/publicView/publicHomepageView.php";
    }

