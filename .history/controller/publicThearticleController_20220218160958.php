<?php


/**
 * Public Homepage
 */

if (isset($_GET['connect'])) {
    if (isset($_POST["theuserLogin"]) && isset($_POST["theuserPwd"]) && $_POST["theuserLogin"] === ADMIN_LOG && $_POST["theuserPwd"] === ADMIN_PWD) {
        $_SESSION["id"] = session_id();
    } else {
        require_once "../view/publicView/publicConnectView.php";
    }
} else {
    require_once "../view/publicView/publicHomepageView.php";
}
