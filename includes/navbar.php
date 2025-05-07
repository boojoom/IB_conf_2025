<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pl';
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$toggleLang = $_SESSION['lang'] === 'pl' ? 'en' : 'pl';
$toggleLabel = strtoupper($toggleLang);

include(__DIR__ . '/../lang/' . $_SESSION['lang'] . '.php');
?>

<nav class="main-nav">
    <ul>
        <li><a href="index.php"><?php echo $lang['home']; ?></a></li>
        <li><a href="program.php"><?php echo $lang['program']; ?></a></li>
        <li><a href="rejestracja.php"><?php echo $lang['registration']; ?></a></li>
        <li><a href="organizatorzy.php"><?php echo $lang['organizers']; ?></a></li>
        <li><a href="kontakt.php"><?php echo $lang['contact'] ?? 'Contact'; ?></a></li>
        <li style="float:right;">
            <a href="?lang=<?php echo $toggleLang; ?>"><?php echo $toggleLabel; ?></a>
        </li>
    </ul>
</nav>
