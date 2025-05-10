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

    <main class="container py-5 text-center">
        <h2 class="mb-4 fade-in"><?php echo $lang['announcements']; ?></h2>

        <div class="row justify-content-center mt-5">
            <!-- Announcement 1 -->
            <div class="col-md-6 mb-4 fade-in" style="animation-delay: 0s;">
                <div class="card text-light shadow-sm" style="background-color: #32327C;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang['announcement_1_title']; ?></h5>
                        <p class="card-text"><?php echo $lang['announcement_1_text']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Announcement 2 -->
            <div class="col-md-6 mb-4 fade-in" style="animation-delay: 0.2s;">
                <div class="card text-light shadow-sm" style="background-color: #32327C;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang['announcement_2_title']; ?></h5>
                        <p class="card-text"><?php echo $lang['announcement_2_text']; ?></p>
                        <a href="https://bioorganic.pwr.edu.pl/people/monika-szefczyk"><?php echo $lang['announcement_2_link']; ?></a>
                    </div>
                </div>
            </div>

            <!-- Announcement 3 -->
            <div class="col-md-6 mb-4 fade-in" style="animation-delay: 0.4s;">
                <div class="card text-light shadow-sm" style="background-color: #32327C;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang['announcement_3_title']; ?></h5>
                        <p class="card-text"><?php echo $lang['announcement_3_text']; ?></p>
                        <a href="https://www.facebook.com/events/1820904282082616?acontext=%7B%22event_action_history%22%3A[%7B%22extra_data%22%3A%22%22%2C%22mechanism%22%3A%22surface%22%2C%22surface%22%3A%22edit_dialog%22%7D%2C%7B%22extra_data%22%3A%22%22%2C%22mechanism%22%3A%22surface%22%2C%22surface%22%3A%22permalink%22%7D%2C%7B%22extra_data%22%3A%22%22%2C%22mechanism%22%3A%22surface%22%2C%22surface%22%3A%22edit_dialog%22%7D]%2C%22ref_notif_type%22%3Anull%7D">CYBER 2025</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include("includes/footer.php"); ?>