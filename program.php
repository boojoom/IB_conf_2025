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
    <title><?php echo $lang['program_of_conf']; ?> - <?php echo $lang['title']; ?></title>
    <meta name="description" content="<?php echo $lang['description']; ?>">
    <meta name="keywords" content="Program, Konferencja, Cyberbezpieczeństwo">
    <meta name="author" content="Adam Gruda">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Import CSS -->
    <link href="css/default.css" rel="stylesheet" />
</head>
<body>

<?php
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
                        <td>13:00–14:00</td>
                        <td><?php echo $lang['lunch']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-6">
                        <td>14:00–15:30</td>
                        <td><?php echo $lang['session3']; ?></td>
                    </tr>
                    <tr class="fade-in-up fade-delay-7">
                        <td>15:30–16:00</td>
                        <td><?php echo $lang['coffee']; ?></td>
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

</body>
</html>
