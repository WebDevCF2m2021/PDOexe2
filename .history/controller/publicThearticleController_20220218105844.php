<?php



/**
 * Public Homepage
 */

$test = thearticleSelectAll($db);

foreach ($test as $item) {
    echo $item["idthearticle"] . ")" . $item["thearticletext"];
}

require_once "../view/publicView/publicHomepageView.php";
