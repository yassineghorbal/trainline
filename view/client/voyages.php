<?php
// session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <style>
        body::before {
            display: block;
            content: '';
            height: 100px;
        }
    </style>

    <title>trainline.ma</title>
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
                            <a href='http://localhost/trainline/home/profile/<?= $id ?>' class="nav-link mx-1"><?= ucfirst($_SESSION['nom']) ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link mx-1">Mes voyages</a>
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


    <div class="container mb-5">
        <?php 
            $array = array($result);
        ?>
        
        <?php if(count($array) > 0) { ?>
            <h1 class="text-center mb-5">Voyages Réservés</h1>
                <?php foreach ($array as $row): ?>
                    <?php foreach ($row as $x): ?>
                        <div class="card text-center mb-2 w-25 mx-auto bg-dark">
                            <div class="card-body text-light">
                                <h4 class="card-title"><?= ucfirst($x['depart']); ?> <i class="bi bi-arrow-right"></i> <?= ucfirst($x['arrivee']); ?></h4>
                                <h6><?= $x['prix']; ?> DH</h6>
                                <p class="card-text"><?= $x['dateDepart']; ?> <i class="bi bi-arrow-right"></i> <?= $x['dateArrivee']; ?></p>
                                <br>
                                <form action='http://localhost/trainline/reservation/cancel/<?= $x['id'] ?>' method='POST'>

                                <input type='submit' name='cancel' value='Annuler voyage' class='btn btn-danger'>

                                </form>
                            </div>        
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
        <?php } ?>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>