<?php



function userEntryProtection(
    string $entry,
    int $flags = ENT_QUOTES,
    string $characters = " \n\r\t\v\0",
    $allowed_tags = null,
    ?string $encoding = "UTF-8",
    bool $double_encode = true
): string {
    return htmlspecialchars(strip_tags(trim($entry, $characters), $allowed_tags), $flags, $encoding, $double_encode);
}

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
