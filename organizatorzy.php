<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'pl';
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
include(__DIR__ . '/lang/' . $_SESSION['lang'] . '.php');
include("includes/header.php");
include("includes/navbar.php");
?>

<main class="container py-5">
    <h2 class="text-center mb-5 fade-in-up"><?php echo $lang['organizing_committee']; ?></h2>

    <div class="row justify-content-center">
        <!-- Organizer 1 -->
        <div class="col-md-6 col-lg-4 mb-4 fade-in-up fade-delay-1">
            <div class="card bg-dark text-white shadow-sm h-100 text-center rounded-4 overflow-hidden">
                <img src="images/avatar.jpg" class="card-img-top img-fluid" alt="Organizer 1">
                <div class="card-body" style="background-color: #32327C;">
                    <h5 class="card-title mb-2">Anna Kowalska</h5>
                    <p class="card-text mb-4"><?php echo $lang['coordinator']; ?></p>
                </div>
            </div>
        </div>

        <!-- Organizer 2 -->
        <div class="col-md-6 col-lg-4 mb-4 fade-in-up fade-delay-2">
            <div class="card bg-dark text-white shadow-sm h-100 text-center rounded-4 overflow-hidden">
                <img src="images/avatar.jpg" class="card-img-top img-fluid" alt="Organizer 2">
                <div class="card-body" style="background-color: #32327C;">
                    <h5 class="card-title mb-2">Michał Nowak</h5>
                    <p class="card-text mb-4"><?php echo $lang['logistics']; ?></p>
                </div>
            </div>
        </div>

        <!-- Organizer 3 -->
        <div class="col-md-6 col-lg-4 mb-4 fade-in-up fade-delay-3">
            <div class="card bg-dark text-white shadow-sm h-100 text-center rounded-4 overflow-hidden">
                <img src="images/avatar.jpg" class="card-img-top img-fluid" alt="Organizer 3">
                <div class="card-body" style="background-color: #32327C;">
                    <h5 class="card-title mb-2">Julia Wiśniewska</h5>
                    <p class="card-text mb-4"><?php echo $lang['media']; ?></p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("includes/footer.php"); ?>
