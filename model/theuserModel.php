<?php

function theuserSelectAll(PDO $db): array
{
    try {
        $sth = $db->query("SELECT idtheuser, theuserLogin, theuserName
        FROM theuser ORDER BY theuserName ASC");
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        return [];
    }
    return $result;
}
