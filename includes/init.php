<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    ini_set('session.cookie_lifetime', 0);
    ini_set('session.cookie_secure', 1);
    ini_set('session.name', 'CYBER_06232025');
    ini_set('session.cookie_httponly', 1);

    session_start();
}
?>
