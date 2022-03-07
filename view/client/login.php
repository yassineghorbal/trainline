<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <style>
        body::before{
          display: block;
          content: '';
          height: 100px;
        }
    </style>

    <title>Se connecter</title>
  </head>
  <body>
    <!-- navbar -->
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
            
            <li class="nav-item">
              <a href="#" class="nav-link mx-1" >Se connecter<i class="bi bi-box-arrow-in-right"></i></a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


    <h1 class="text-center mb-5 p-3">Se connecter</h1>
    


	<div class="container w-25">
  <!-- to make it check db for user before login -->
		<form action="http://localhost/trainline/login" method="POST">
		
        <div class="mb-3">
          <label class="form-label">email</label>
          <input type="email" class="form-control" name="email" required><br>
          <label class="form-label">password</label>
          <input type="password" class="form-control" name="password" required<br>
        </div>
			
			<button class="btn btn-success" name="login">se connecter</button>
			<a href="http://localhost/trainline/home" class="btn btn-warning">annuler</a>
		</form> 
	</div>
    


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>