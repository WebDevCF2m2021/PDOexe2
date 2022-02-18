<?php


/**
 * Public Homepage
 */


if (isset($_GET['connect'])) {
    require_once "../view/publicView/publicConnectView.php";
} else {
    require_once "../view/publicView/publicHomepageView.php";
}
