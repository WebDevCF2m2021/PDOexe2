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

function disconnect()
{
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
}
