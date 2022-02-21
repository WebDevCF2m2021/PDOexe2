<?php

function connectionVerify(string $loginPost, string $pwdPost, string $loginConfig, string $pwdConfig)
{
    if ($loginPost === $loginConfig && $pwdPost === $pwdConfig) {
        $_SESSION["id"] = session_id();
        $toReturn = true;
    } else {
        $toReturn = false;
    }
    return $toReturn;
}
