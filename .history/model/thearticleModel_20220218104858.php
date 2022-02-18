<?php

function thearticleSelectAll(PDO $db, int $substr = 250, int $limit = 20, int $offset = 0)
{
    $query = "  SELECT 
                        a.idthearticle,a.thearticletitle, SUBSTR(a.thearticletext,1,?) as thearticletext,a.thearticledate, 
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
LIMIT ? OFFSET ?;";
    try {
        $prepare = $db->prepare($query);
        $prepare->bindParam(1, $substr, PDO::PARAM_INT);
        $prepare->bindParam(2, $limit, PDO::PARAM_INT);
        $prepare->bindParam(3, $offset, PDO::PARAM_INT);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
    } catch (Exception $e) {
        $result = [];
    }
    return $result;
}
