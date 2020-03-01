<?php
include("initialiser.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accueil</title>

  <!-- CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/bières.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">King Of Beer</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="MAC.php">MAC Carthy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="GAV.php">Gavroche</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ARC.php">Arcade</a>
          </li>
       <li class="nav-item">
            <a class="nav-link" href="QUI.php">Quincaillerie</a>
          </li>
       <li class="nav-item">
            <a class="nav-link" href="BER.php">Berthom</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Le Gavroche</h3>
            <p>Place saint-evre en plein coeur de Nancy</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Le Berthom</h3>
            <p>Les meilleurs bières pressions de Nancy</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>La Quincaillerie</h3>
            <p>Plus qu'un bar une ambiance décontracter autour d'une bière</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Salut</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Abababa</span>
      </a>
    </div>
  </header>

  <!-- Contenu de la page -->
  <div class="container">

    <h1 class="my-4">Nos coups de coeur</h1>

    <!-- Nos coups de coeur -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Les Arcades</h4>
          <div class="card-body">
            <p class="card-text">Très grand bar dehors</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Le Berthom</h4>
          <div class="card-body">
            <p class="card-text">La plus grande carte de bière de Nancy</p>
            <p class="card-text">Brune Blonde ou Ambrée venez découvrir nos bières</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Le Mac Carthy</h4>
          <div class="card-body">
            <p class="card-text">Ambiance écossaise : billard et bière sont les clès du succès du Mac Carthy</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Notre séléctions de bières -->
    <h2>Notre séléctions de bières créé spécialement pour vous</h2>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              La Paix Dieu 
            </h4>
            <p class="card-text">Bière Paix Dieu</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              La Kwak
            </h4>
            <p class="card-text">Bière Kwak</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              La Kasteel
            </h4>
            <p class="card-text">Kasteel est une bière aromatisée au fruit rouge</p>
          </div>
        </div>
          <br/><br/>
      </div>
      
    <!-- /.row -->

  </div>

  <!-- Java Script -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
