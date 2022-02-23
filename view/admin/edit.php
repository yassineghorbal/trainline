<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<title>edit produit</title>
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
              <a href="http://localhost/trainline/admin/" class="nav-link mx-1">Admin<i class="bi bi-person"></i></a>
            </li>
            
          </ul>
  
        </div>
      </div>
    </nav>

	<h1 class="text-center mb-5 border border-secondary p-3">Edit Voyage</h1>

	<div class="container-lg">
		<form action="http://localhost/trainline/admin/update/<?=$voyage['id']?>" method="POST">
			<div class="row">
				<div class="col-md">
					<label class="form-label">date de depart</label>
					<input type="datetime-local" class="form-control" name="dateDepart" value="<?=$voyage['dateDepart']?>"><br>
					<label class="form-label">date d'arrivee</label>
					<input type="datetime-local" class="form-control" name="dateArrivee" value="<?=$voyage['dateArrivee']?>"><br>
					<label class="form-label">prix</label>
					<input type="number" class="form-control" name="prix" value="<?=$voyage['prix']?>"><br>
				</div>
				<div class="col-md">
					<label class="form-label">gare de depart</label>
					<input type="text" class="form-control" name="depart" value="<?=$voyage['depart']?>"><br>
					<label class="form-label">gare d'arrivee</label>
					<input type="text" class="form-control" name="arrivee" value="<?=$voyage['arrivee']?>"><br>
					<label class="form-label">train</label>
					<input type="number" class="form-control" name="idTrain" required value="<?=$voyage['idTrain']?>"><br>
				</div>
			</div>
			<button class="btn btn-success">sauvegarder</button>
      <a href="http://localhost/trainline/admin" class="btn btn-warning">annuler</a>
		</form>
	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>