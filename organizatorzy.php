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

<main class="container py-5" style="border-radius: 12px; max-width: 1000px;">
    <h2 class="text-center text-white mb-5 slide-in-top"><?php echo $lang['organizing_committee']; ?></h2>
    
    <div class="row justify-content-center g-4">
    <?php foreach ($lang['committee_members'] as $member): ?>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card shadow-sm w-100" style="background-color: #32327c; color: white; border-radius: 12px; min-height: 150px;">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <h5 class="card-title mb-2"><?php echo $member['name']; ?></h5>
                    <p class="card-text"><?php echo $member['role']; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</main>



<?php include("includes/footer.php"); ?>
