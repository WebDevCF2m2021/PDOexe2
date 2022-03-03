<?php

function theSectionSelectAllNav(PDO $db)
{
    try {
        $sth = $db->query("SELECT idthesection,thesectiontitle 
              FROM thesection
              ORDER BY thesectiontitle ASC");
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        return [];
    }
    return $result;
}
function thesectionSelectOneById(PDO $db, int $id)
{
    try {
        $prepare = $db->prepare("SELECT * FROM thesection WHERE idthesection=?");
        $prepare->bindParam(1, $id, PDO::PARAM_INT);
        $prepare->execute();
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        $prepare->closeCursor();
    } catch (Exception $e) {
        return [];
    }
    return $result;
}

