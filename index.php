<?php
include 'includes/init.php';

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pl';
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
include(__DIR__ . '/lang/' . $_SESSION['lang'] . '.php');
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['title']; ?></title>
    <meta name="description" content="<?php echo $lang['description']; ?>">
    <meta name="keywords" content="Konferencja, Cyberbezpieczeństwo, 2025">
    <meta name="author" content="Adam Gruda">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Import CSS -->
    <link href="css/default.css" rel="stylesheet" />
</head>
<body>

<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<main class="container mt-5">
    <div class="row align-items-start">
        <!-- Left column: title + description + card -->
        <div class="col-12 col-md-8 fade-in" style="animation-delay: 0.1s; animation-fill-mode: both;">
            <h2 class="mb-3"><?php echo $lang['welcome_heading']; ?></h2>
            
            <div class="card text-light p-4" style="background-color: #32327C;">
                <p><?php echo $lang['welcome_important_title']; ?></p>
                <p><?php echo $lang['welcome_important_text1']; ?></p>
                <p><?php echo $lang['welcome_important_text2']; ?></p>
            </div>
            <div class="card text-light p-4" style="background-color: #32327C;">
                <p><?php echo $lang['welcome_important_title']; ?></p>
                <p><?php echo $lang['welcome_important_text2']; ?></p>
            </div>
            <div class="card text-light p-4" style="background-color: #32327C;">
                <p><?php echo $lang['welcome_text_1']; ?></p>
                <p><?php echo $lang['welcome_text_2']; ?></p>
            </div>
        </div>

        <!-- Right column: image -->
        <div class="col-12 col-md-4 text-center fade-in" style="
            animation-delay: 0.3s; 
            animation-duration: 1.2s; 
            animation-fill-mode: both; 
            animation-name: fadeInMoveUp; 
            animation-timing-function: ease-out;">
            <img 
                src="images/1.png"
                alt="Photo" 
                class="img-fluid rounded shadow-lg" 
                style="max-width: 365px; height: auto;"
            >
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>

</body>
</html>
