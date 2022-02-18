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
