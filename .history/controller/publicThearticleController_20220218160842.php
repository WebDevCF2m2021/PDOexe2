<?php


/**
 * Public Homepage
 */

if (isset($_GET['connect'])) {
    if (isset($_POST["theuserLogin"]) && isset($_POST["theuserPwd"])) {
    } else {
        require_once "../view/publicView/publicConnectView.php";
    }
} else {
    require_once "../view/publicView/publicHomepageView.php";
}
