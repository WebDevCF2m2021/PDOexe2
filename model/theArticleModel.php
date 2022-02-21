<?php

function thearticleSelectAll(PDO $db, int $substr = 250, int $limit = 20, int $offset = 0)
{
    $query = "SELECT 
    a.idthearticle,a.thearticletitle, SUBSTR(a.thearticletext,1,$substr) as thearticletext,a.thearticledate, 
    u.idtheuser,u.theusername,
    GROUP_CONCAT(s.idthesection) AS idthesection, 
    GROUP_CONCAT(s.thesectiontitle SEPARATOR '|||') AS thesectiontitle FROM thearticle a 
    INNER JOIN theuser u
        ON a.theuser_idtheuser = u.idtheuser
    INNER JOIN thearticle_has_thesection ahs
        ON a.idthearticle = ahs.thearticle_idthearticle
    INNER JOIN thesection s
        ON ahs.thesection_idthesection = s.idthesection
    GROUP BY a.idthearticle
    ORDER BY a.thearticledate DESC
    LIMIT $limit OFFSET $offset;";
    try {
        $prepare = $db->prepare($query);
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
    } catch (Exception $e) {
        $result = [];
    }
    return $result;
}


function thearticleSelectOneById(PDO $db, int $id) {
     try{
        $queryA = "SELECT `idthearticle`,`thearticletitle`,`thearticletext`,`thearticledate`,`idtheuser` FROM `thearticle` INNER join theuser ON `theuser_idtheuser`= `idtheuser` INNER join thearticle_has_thesection ON `thesection_idthesection`=`thesection_idthesection`";
        $stmt = $db->prepare($queryA);
        $resultA = $prepareA->fetchAll(PDO::FETCH_ASSOC);
     }
     catch(Exception $e){
        $resultA = [];
     }
    return $result;
}
//thearticleSelectOneById ($db);
//var_dump (thearticleSelectOneById());