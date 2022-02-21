<?php
/*Charger le détail d'un auteur en créant le fichier theuserModel.php contenant*/
function idauteur(PDO $db)
{
    try {
        $sth = $db->query("SELECT theusername
              FROM theuser
              ORDER BY theusername ASC");
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        return [];
    }
    return $result;
}

/*theuserSelectOneById(PDO $db, int $int)*/

function theuserSelectOneById(PDO $db, int $int){

    try {
        $sth = $db->query("SELECT idtheuser, theusername 
              FROM theuser");
              
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        return [];
    }
    return $result;

}