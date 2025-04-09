<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<main class="container mt-5">
    <div class="row align-items-start">
        <!-- Left column: title + description + card -->
        <div class="col-12 col-md-8 fade-in" style="animation-delay: 0.1s; animation-fill-mode: both;">
            <h2 class="mb-3">Welcome to the IB Conference!</h2>
            <p class="mb-4">An overview of the conference, information about the program, speakers, and more.</p>

            <div class="card text-light p-4" style="background-color: #32327C;">
                <p>
                    The IB Conference is a unique event that brings together specialists from the fields of bioinformatics, 
                    molecular biology, computer science, and data engineering. During the conference, participants will be able 
                    to attend a variety of lectures, workshops, and discussion panels led by renowned speakers from Poland and abroad.
                </p>
                <p>
                    Our goal is to create a space for knowledge exchange, the presentation of the latest scientific achievements, 
                    and the development of interdisciplinary collaboration. We encourage students, PhD candidates, researchers, 
                    and industry representatives to actively take part in this inspiring event.
                </p>
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
                src="images/freepik__upload__68098.png" 
                alt="Photo" 
                class="img-fluid rounded shadow-lg" 
                style="max-width: 365px; height: auto;"
            >
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
