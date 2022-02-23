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
          height: 60px;
        }
      
    </style>

    <title>trainline.ma</title>
  </head>
  <body>
    <!-- navbar -->
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
              <a href="#" class="nav-link mx-1">Mes voyages</a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/trainline/signup" class="nav-link mx-1">S'inscrire<i class="bi bi-person"></i></a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/trainline/login" class="nav-link mx-1" class="nav-link mx-1">Se connecter<i class="bi bi-box-arrow-in-right"></i></a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control  mx-2" type="search" placeholder="Trouver un voyage..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    <!-- voyages section : table where all the trips added by the admin show and are filtered by the search of the user-->
    <section>
      <div class="container">
        
      </div>
    </section>

    <!-- Question Accordion -->
    <section id="questions" class="m-5">
      <div class="container">
        <h2 class="text-center ">Questions fréquemment posées</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-one"
              >
              Où êtes-vous exactement situé?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
            >
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
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-two"
              >
              Combien coûte un billet?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
            >
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
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
              >
                Comment acheter un billet?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
            >
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
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-four"
              >
                Quand reserver un billet de train?
              </button>
            </h2>
            <div
              id="question-four"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
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
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-five"
              >
                Lorem ipsum dolor sit amet?
              </button>
            </h2>
            <div
              id="question-five"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
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
    


    <!-- Contact & Map -->
    <section class="p-2">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center m-5">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
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
          <div class="col-md  p-5">
            <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.6794627055415!2d-9.237701285384025!3d32.293594815784836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYoucode%20Safi!5e0!3m2!1sen!2sma!4v1645177151198!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="p-5 mx-0 bg-light text-center position-relative">
      <div class="container">

        <div class="position-absolute bottom-0 start-0 p-5">
        <a href="#">
          <i class="bi bi-facebook h3 p-1 m-1"></i>  
        </a>
        <a href="#">
          <i class="bi bi-instagram h3 p-1 m-1"></i>  
        </a>
        <a href="#">
          <i class="bi bi-twitter h3 p-1 m-1"></i>  
        </a>
        
        </div>
        
        <p class="lead">Copyright &copy; 2021 trainline.ma</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

    

    












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>