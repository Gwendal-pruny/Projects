<?php
session_start();
if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
  // la session est valide, stocker l'email dans une variable JavaScript
  echo "<script>var userEmail = " . json_encode($_SESSION['email']) . ";</script>";
} else {
  // la session n'est pas valide, rediriger l'utilisateur vers la page de connexion
  header('Location: login.php');
  exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My anime list</title>
    <link rel="icon" href="https://i.pinimg.com/474x/3e/55/1c/3e551cb588a9263b9f438ce573aa8e04.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Css  -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
  </head>
  <body>

<!-- ---------------------------------------- navbar ---------------------------------------- -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
        <a class="navbar-brand text-white" href="index.php" style="font-family: 'Anton', sans-serif;font-size: 25px; letter-spacing: 1px; text-shadow: 1px 1px 2px #000000; color: #FFC300;">MyAnimeList</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                      <a class="nav-link" href="favoris.php">Favoris</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Rechercher</button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                  
                  <li class="nav-item mr-4">
                      <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                  </li>
                  
                  </ul>
                </form>
            </div>
        </div>
    </nav>

<!-- ---------------------------------------- navbar ---------------------------------------- -->

<!-- ---------------------------------------- carousel ---------------------------------------- -->
<div class="row mb-4">
  <div class="col">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>      
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <figure>
            <img src="https://wallpaperaccess.com/full/2827067.jpg" class="d-block w-100 img-carrusel" alt="...">

          </figure>
        </div>
        <div class="carousel-item">
          <figure>
            <img src="https://wallpaperaccess.com/full/5240866.jpg" class="d-block w-100 img-carrusel" alt="...">
          </figure>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédant</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </div>
</div>
<!-- ---------------------------------------- carousel ---------------------------------------- -->

<!-- ---------------------------------------- Left row ---------------------------------------- -->         
        <div class="row">
            <div class="col-md-3">
                <aside >

                    <ul class="list-group" id="animesTop">
                    <li class="list-group-item" style="background-color: #ADD8E6; font-family: 'Delicious Handrawn', cursive;">Top des animes</li>
                        
                      </ul>

                      <ul class="list-group mt-4" id="Upcomming">
                      <li class="list-group-item" style="background-color: #ADD8E6; font-family: 'Delicious Handrawn', cursive;">Bientôt disponible</li>
                      </ul>
                </aside>
            </div>
<!-- ---------------------------------------- Left row  ---------------------------------------- -->
<!-- ---------------------------------------- +++++++++ ---------------------------------------- -->        
<!--<div class="filters">
                  <div class="filters-container">
                    <div class="filter" data-category="all">Tous</div>
                    <div class="filter" data-category="Action Adventure">Action Adventure </div>
                    <div class="filter" data-category="Action Adventure Fantasy">Action Adventure Fantasy</div>
                    <div class="filter" data-category="Action">Action</div>
                  </div>
                </div>    ---------------------------------------- Right row ---------------------------------------- -->         
            <div class="col-md-9">
                <h2 class="mt-4" style ="font-family: 'Delicious Handrawn', cursive;">Derniers animés ajoutés</h2>
                
                <div class="row row-cols-1 row-cols-md-4 mt-4" id="LastOneAnimes">
                    
                </div>
                <h2 class="mt-4" style ="font-family: 'Delicious Handrawn', cursive;">Dernières sorties</h2>
                <div class="row row-cols-1 row-cols-md-4 mt-4" id="chapitre">    

                </div>
            </div>
        </div>
    </div>
<!-- ---------------------------------------- Right row ---------------------------------------- -->         



<!-- ----------------------------------------  Footer  ---------------------------------------- -->
    <footer class="mt-3 p-4 bg-dark text-center text-white">
        BTS SIO Esiee-IT Project : My anime list &copy; 2022
    </footer>
<!-- ----------------------------------------  Footer  ---------------------------------------- -->
   


<!-- ----------------------------------------  Script  ---------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="assets/js/episode.js"></script>
    <script src="assets/js/topAnime.js"></script>
    <script src="assets/js/upComming.js"></script>
    <script src="assets/js/lastOne.js"></script>
    <script src="assets/js/searcher.js"></script>
    <script src="assets/js/filter.js"></script>

<!-- ----------------------------------------  Script  ---------------------------------------- -->

  </body>
</html>