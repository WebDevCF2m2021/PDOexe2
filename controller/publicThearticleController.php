<?php

$sections = theSectionSelectAllNav($db);

if (isset($_GET['connect'])) {
    require_once "../view/publicView/publicConnectView.php";
} else {
    /**
     * Public Homepage
     */
    $articles = thearticleSelectAll($db);
    require_once "../view/publicView/publicHomepageView.php";
}
