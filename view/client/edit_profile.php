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

                        <li class="nav-item">
                            <a href='#' class='nav-link mx-1'><?= $_SESSION['nom'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/trainline/home/voyages/<?= $id ?>" class="nav-link mx-1">Mes voyages</a>
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


    <!-- edit personal info -->
    
    <div class="container-lg">
        <h3 class="text-center mb-5">Modifier Vos Informations Personnelles</h3>
		<form action="http://localhost/trainline/home/update/<?=$user['id']?>" method="POST">
				<div class="col-md w-50 mx-auto">
					<label class="form-label">nom</label>
					<input type="text" class="form-control" name="nom" value="<?=$user['nom']?>"><br>
					<label class="form-label">prenom</label>
					<input type="text" class="form-control" name="prenom" value="<?=$user['prenom']?>"><br>
					<label class="form-label">telephone</label>
					<input type="phone" class="form-control" name="telephone" value="<?=$user['telephone']?>"><br>
					<label class="form-label">email</label>
					<input type="email" class="form-control" name="email" value="<?=$user['email']?>"><br>

                    <button class="btn btn-success">sauvegarder</button>
                    <a href="http://localhost/trainline/home/profile/<?=$user['id']?>" class="btn btn-warning">annuler</a>
				</div>
                
		</form>
	</div>


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