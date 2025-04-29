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
    <h2 class="text-center mb-4 fade-in-up"><?php echo $lang['contact']; ?></h2>
    <p class="text-center mb-5 fade-in-up"><?php echo $lang['contact_intro']; ?></p>

    <div class="row justify-content-center align-items-center">
        <!-- Form -->
        <div class="col-md-6 fade-in-up fade-delay-1">
            <form action="mailto:zofia.dobrowolska@pwr.edu.pl" method="post" enctype="text/plain">
                <div class="mb-3">
                    <label for="name" class="form-label"><?php echo $lang['contact_name']; ?></label>
                    <input type="text" class="form-control" id="name" name="name" required />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><?php echo $lang['contact_email']; ?></label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label"><?php echo $lang['contact_message']; ?></label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-lg px-4 py-2" style="background-color: #32327c; color: white;">
                    <?php echo $lang['contact_send']; ?>
                </button>
            </form>
        </div>

        <!-- Image -->
        <div class="col-md-6 text-center fade-in-up fade-delay-2">
        <img src="images/2.png"
     alt="<?php echo $lang['contact_alt']; ?>" 
     class="img-fluid mt-4 mt-md-0"
     style="max-width: 100%; height: auto; background-color: transparent; border: none; box-shadow: none;" />

        </div>
    </div>
</main>

<?php include("includes/footer.php"); ?>
