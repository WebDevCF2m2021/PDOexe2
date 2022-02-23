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


//Suggestion Prof ce Lun 21 Fev 2022 - Aec recommandation de tester pour voir si ça fonctionne

//"Duplication" du ticket original. La version 1.2 du ticket "version duo" est ci-dessous

/*Commented 2 days ago
Quand il existe la variable GET idsection*/



/*Création d'une vue pour afficher les détails de la section et
les 20 derniers articles de cette section (comme l'accueil)*/

/*Dans model\theSectionModel.php créez 1 fonctions :
voir avec Thomas pour thesectionSelectOneById(PDO $db, int $id)
(tous les champs de la section par son ID) @thomas-ayissi*/

/*Dans le model model\theArticleModel.php ajouter une fonction
qui va charger 20 articles (comme l'accueil) qui se trouvent
dans la section : thearticleSelectAllByIdthesection(PDO $db, int $id)*/



/*
Requête préparée souhaitée
`function thesectionSelectOneById(PDO $db, int $id)
{
try {
$sth = $db->prepare("SELECT *
FROM thesection
WHERE idsection = ?");
$sth->execute([$id]);
return $result = $sth->fetch(PDO::FETCH_ASSOC);
} catch (Exception $e) {
return [];
}

}*/





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

}

public
PDO::prepare(string $query, array $options = []): PDOStatement | false