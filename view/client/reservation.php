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
	<title>Reservation</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="http://localhost/trainline/home" class="navbar-brand h1">Trainline</a>

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
            
            
            
          </ul>
  
        </div>
      </div>
    </nav>


	<h1 class="text-center mb-5 p-3">Reserver Voyage</h1>



  <div class="container">
    <?php foreach($voyages as $voyage) : ?>
		<form action="http://localhost/trainline/reservation/reserver/<?=$voyage['id']?>" method="POST">
			<div class="row">
			<div class="col">
				<label class="form-label">date de depart</label>
				<input type="datetime-local" class="form-control" value="<?= $voyage['dateDepart']  ?>" name="dateDepart" readonly><br>
				<label class="form-label">date d'arrivee</label>
				<input type="datetime-local" class="form-control" value="<?= $voyage['dateArrivee'] ?>" name="dateArrivee" readonly><br>
				<label class="form-label">prix</label>
				<input type="number" class="form-control" value="<?= $voyage['prix'] ?>" name="prix" readonly><br>
			</div>
			<div class="col">
				<label class="form-label">gare de depart</label>
				<input type="text" class="form-control" value="<?= $voyage['depart']  ?>" name="depart" readonly><br>
				<label class="form-label">gare d'arrivee</label>
				<input type="text" class="form-control" value="<?= $voyage['arrivee']  ?>" name="arrivee" readonly><br>
				
			</div>
			</div>
      <input type="submit" name="reserver" value="passer au payment" class="btn btn-success">
		</form>
    <?php endforeach ?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>