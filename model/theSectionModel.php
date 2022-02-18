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
/*Ticket Thomas : créer une fonction nommée thesectionSelectOneById(PDO $db, int $id)
Elle va charger tous les champs de la table thesection quand l'idthesection vaut $id (1 résultat ou 0),
Requête préparée, renvoie un tableau associatif si réussi, un tableau vide en cas d'échec*/


function thesectionSelectOneById(PDO $db, int $id)
{
    try {
        $sth = $db->query("SELECT * 
              FROM thesection
              WHERE idsection BETWEEN 0 and 1");
        $result = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        return [];
    }
    return $result;
}