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
    <h2 class="text-center mb-4"><?php echo $lang['program_of_conf']; ?></h2>
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 fade-in-up">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><?php echo $lang['time']; ?></th>
                        <th scope="col"><?php echo $lang['event']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="fade-in-up fade-delay-1">
                        <td>09:00–09:30</td>
                        <td><?php echo $lang['opening']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-2">
                        <td>09:30–11:00</td>
                        <td><?php echo $lang['session1']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-3">
                        <td>11:00–11:30</td>
                        <td><?php echo $lang['coffee']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-4">
                        <td>11:30–13:00</td>
                        <td><?php echo $lang['session2']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-5">
                        <td>13:00–13:30</td>
                        <td><?php echo $lang['coffee']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-6">
                        <td>13:30–15:00</td>
                        <td><?php echo $lang['session3']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-7">
                        <td>15:00–16:00</td>
                        <td><?php echo $lang['lunch']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-8">
                        <td>16:00–17:30</td>
                        <td><?php echo $lang['session4']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-9">
                        <td>17:30–18:00</td>
                        <td><?php echo $lang['closing']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include("includes/footer.php"); ?>
