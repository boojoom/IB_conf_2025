<?php
$lang = 'pl';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
?>

<header class="site-header">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <div class="header-container container py-3 d-flex align-items-center">
        <img src="images/logo_<?php echo $lang; ?>_W.png" alt="WUST logo" class="header-logo">
        <img src="images/CYBER.png" alt="CYBER logo" class="header-logo">
    </div>
</header>
