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
        $prepare = $db->query($query);
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
    } catch (Exception $e) {
        $result = [];
    }
    return $result;
}

function thearticleInsert(PDO $db, array ...$elements)
{
    $title = userEntryProtection($elements[""]);
    $text = userEntryProtection($elements[""]);
    $user = (int) $elements[""];
    $sections = [];
    foreach ($elements[""] as $section) {
        array_push($sections, (int) $section);
    }
    try {
        $db->beginTransaction();
        $prepare = $db->prepare("INSERT INTO thearticle (thearticletitle,thearticletext,theuser_idtheuser) VALUES (?,?,?);");
        $prepare->bindParam(1, $title, PDO::PARAM_STR);
        $prepare->bindParam(2, $text, PDO::PARAM_STR);
        $prepare->bindParam(3, $user, PDO::PARAM_INT);
        $prepare->execute();

        $id = $db->lastInsertId();
        foreach ($sections as $section) {
            $prepare = $db->prepare("INSERT INTO `thearticle_has_thesection`(`thearticle_idthearticle`, `thesection_idthesection`) VALUES (?,?)");
            $prepare->bindParam(1, $id, PDO::PARAM_INT);
            $prepare->bindParam(2, $section, PDO::PARAM_INT);
            $prepare->execute();
        }

        $db->commit();
    } catch (Exception $e) {
        $db->rollBack();
        die($e->getMessage());
    }
    return true;
}
