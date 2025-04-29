<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pl';
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
include(__DIR__ . '/lang/' . $_SESSION['lang'] . '.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<main class="container py-5" style="border-radius: 12px;">
    <div class="row align-items-center justify-content-center">
        <!-- Left column: text -->
        <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0 text-white slide-in-left">
            <h2 class="mb-4"><?php echo $lang['registration_on_conf']; ?></h2>
            <p class="lead mb-4">
                <?php echo $lang['registration_intro']; ?>
            </p>
            <a href="https://docs.google.com/forms/d/1afNzOSFIJPl-LrBxQrK0Xo0ZQrIOevpPc_13eqqaNNY/edit?ts=67e6cd9c" target="_blank" class="text-decoration-none">
                <button class="btn btn-lg px-5 py-3" style="background-color: #32327c; color: white; font-size: 1.1em;">
                    <?php echo $lang['registration_button']; ?>
                </button>
            </a>
        </div>

        <!-- Right column: image -->
        <div class="col-12 col-md-6 text-center" style="animation-duration: 1.2s; animation-fill-mode: both; animation-name: fadeInMoveUp; animation-timing-function: ease-out;">
            <img src="images/3.png"
                 alt="Registration illustration" 
                 class="img-fluid rounded shadow-lg" 
                 style="max-width: 100%; height: auto; background-color: #32327C;">
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
