<?php

function thearticleSelectAll(PDO $db)
{
    $query = 'SELECT 
    a.idthearticle,a.thearticletitle,a.thearticletext,a.thearticledate, 
    u.idtheuser,u.theusername,
    GROUP_CONCAT(s.idthesection) AS idthesection, 
    GROUP_CONCAT(s.thesectiontitle SEPARATOR "|||") AS thesectiontitle FROM thearticle a 
    INNER JOIN theuser u
ON a.theuser_idtheuser = u.idtheuser
INNER JOIN thearticle_has_thesection ahs
ON a.idthearticle = ahs.thearticle_idthearticle
INNER JOIN thesection s
ON ahs.thesection_idthesection = s.idthesection
GROUP BY a.idthearticle
ORDER BY a.thearticledate DESC
LIMIT 20 OFFSET 0;';
}
