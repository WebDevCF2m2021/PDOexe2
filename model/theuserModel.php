<?php

function theuserSelectAll(mysqli $db): array
{
    $sql = "SELECT idtheuser, theuserLogin
            FROM theuser ORDER BY theuserName ASC;";
    $request = mysqli_query($db, $sql) or die("Erreur SQL :" . mysqli_error($db));
    return mysqli_fetch_all($request, MYSQLI_ASSOC);
}