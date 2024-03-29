<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body::before {
            display: block;
            content: '';
            height: 100px;
        }
    </style>

    <title>Trainline | Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="http://localhost/trainline/home" class="navbar-brand h1">Trainline</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['id'])) : ?>

                        <?php $id =  $_SESSION['id']; ?>
                        <li class="nav-item">
                        <a href='http://localhost/trainline/home/profile/<?= $id ?>' class='nav-link mx-1'><?= ucfirst($_SESSION['nom']) ?></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="http://localhost/trainline/reservation/voyages/<?= $id ?>" class="nav-link mx-1">Mes voyages</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/trainline/login/logout" class="nav-link mx-1">Se deconnecter</a>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/trainline/login" class="nav-link mx-1" class="nav-link mx-1">Se connecter<i class="bi bi-box-arrow-in-right"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/trainline/signup" class="nav-link mx-1">S'inscrire<i class="bi bi-person"></i></a>
                        </li>

                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- search for available trips -->
    <section class="d-flex  justify-content-center ">

        <div class="container">
            <h1 class="text-center mt-5">Trouver un voyage</h1>

            <form class='p-5 text-light d-flex justify-content-center flex-column' action='http://localhost/trainline/reservation/search' method='POST'>
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="form-outline">
                            <label class="form-label text-dark h4">Gare de Départ:</label>
                            <input type="text" name="depart" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-outline">
                            <label class="form-label text-dark h4">Gare d'arrivée:</label>
                            <input type="text" name="arrivee" class="form-control" required>
                        </div>
                    </div>
                </div>  
                <!-- Submit button -->
                <button type='submit' name='search' class="btn btn-primary btn-block mb-5 w-25 mx-auto">
                    Search
                </button>
            </form>
        </div>
    </section>
        
    <!-- Question Accordion -->
    <section id="questions" class="m-5">
        <div class="container">
            <h2 class="text-center">Questions fréquemment posées</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                            Où êtes-vous exactement situé?
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                            Combien coûte un billet?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                            Comment acheter un billet?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
                            Quand reserver un billet de train?
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
                            Lorem ipsum dolor sit amet?
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Contact -->
        <section class="p-1">
            <div class="container d-flex justify-content-center">
                <div class="row">

                    <h2 class="text-center my-5">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Location:</span> 14 Av. Zerktouni, Safi
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Phone:</span> (555) 555-5555
                        </li>

                        <li class="list-group-item">
                            <span class="fw-bold">Email:</span>
                            trainline@gmail.ma
                        </li>

                    </ul>
                </div>

            </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="p-5 mt-2 bg-light text-center position-relative">
            <div class="container">



                <p class="lead">Copyright &copy; 2021 trainline.ma</p>
                <div class="p-1">
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-facebook h3 m-1"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-instagram h3 m-1"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-twitter h3 m-1"></i>
                    </a>

                </div>

                <a href="#" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
            </div>
        </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>