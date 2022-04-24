<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <style>
        body::before{
          display: block;
          content: '';
          height: 100px;
        }
      
    </style>
    <title>Admin</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand h1">Trainline</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            
            <li class="nav-item">
              <a href="#" class="nav-link mx-1" data-bs-toggle="modal"
              data-bs-target="#signup">Admin<i class="bi bi-person"></i></a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>


    <div class="container-lg">
    <table class="table">
        <tr>
        <!-- <th scope="col">id</th> -->
        <th scope="col">date de depart</th>
        <th scope="col">date d'arrivee</th>
        <th scope="col">prix</th>
        <th scope="col">gare de depart</th>
        <th scope="col">gare d'arrivee</th>
        <th scope="col">places</th>
        <th scope="col">action</th>
    </tr>

    <?php  foreach ($voyage as $voy) : ?>
    <tr>
            
            <td> <?= $voy['dateDepart'] ?></td>
            <td> <?= $voy['dateArrivee'] ?></td>
            <td><?= $voy['prix'] ?></td>
            <td><?= $voy['depart'] ?></td>
            <td><?= $voy['arrivee'] ?></td>
            <td><?= $voy['places'] ?></td>
            <td>

            <?php if($voy['canceled'] == 0) : ?>
                <a href='http://localhost/trainline/admin/edit/<?= $voy['id'] ?>' class='btn btn-primary'>Éditer</a>  

                <a href='http://localhost/trainline/admin/delete/<?= $voy['id']?>' class='btn btn-danger'>Annuler</a>
            <?php else : ?>
                <div class="d-flex">
                <p class="text-danger m-1">Annulé</p>
                <a href='http://localhost/trainline/admin/undo/<?= $voy['id']?>' class='d-inline btn btn-primary'>Rendre Disponible</a>
                </div>
            <?php endif; ?>
            <td></tr>
    
    <?php endforeach ?>
    
    </table>

    <a href="http://localhost/trainline/admin/create" class="btn btn-success mx-auto d-block w-25">ajouter un voyage</a>
    
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>