<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<main class="container mt-5">
    <div class="row align-items-start">
        <!-- Lewa kolumna: tytuł + opis + karta -->
        <div class="col-12 col-md-8 fade-in" style="animation-delay: 0.1s; animation-fill-mode: both;">
            <h2 class="mb-3">Witamy na konferencji IB Conference!</h2>
            <p class="mb-4">Opis konferencji, informacje o programie, prelegentach itp. Zawartość strony.</p>

            <div class="card text-light p-4" style="background-color: #32327C;">
                <p>
                    IB Conference to wyjątkowe wydarzenie, które skupia specjalistów z dziedziny bioinformatyki, 
                    biologii molekularnej, nauk komputerowych i inżynierii danych. Podczas konferencji uczestnicy 
                    będą mogli wziąć udział w licznych wykładach, warsztatach i panelach dyskusyjnych prowadzonych 
                    przez uznanych prelegentów z kraju i zagranicy.
                </p>
                <p>
                    Naszym celem jest stworzenie przestrzeni do wymiany wiedzy, prezentacji najnowszych osiągnięć naukowych 
                    oraz nawiązywania interdyscyplinarnej współpracy. Zachęcamy studentów, doktorantów, pracowników naukowych 
                    oraz przedstawicieli branży do aktywnego udziału w tym inspirującym wydarzeniu.
                </p>
            </div>
        </div>

        <!-- Prawa kolumna: obrazek -->
        <div class="col-12 col-md-4 text-center fade-in" style="
    animation-delay: 0.3s; 
    animation-duration: 1.2s; 
    animation-fill-mode: both; 
    animation-name: fadeInMoveUp; 
    animation-timing-function: ease-out;">
            <img 
                src="images/freepik__upload__68098.png" 
                alt="Photo" 
                class="img-fluid rounded shadow-lg" 
                style="max-width: 365px; height: auto;"
            >
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
