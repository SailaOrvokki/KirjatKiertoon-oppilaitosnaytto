<?php require "partials/head.php"; ?>

<!-- Hakunapit alkaa -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center sticky-top">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Koti</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/register">Rekisteröidy</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/login">Kirjaudu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ilmoitukset">Kirjailmoitukset</a>
      </li>
      <li class="nav-item">
        </div>
        <a class="nav-link" href="#" data-toggle="tooltip" title="Ostoksia 2 kpl">Ostoskori</a>
  
        <!-- tooltip script alkaa, eriytä -->
       <script>
          $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
          });
        </script> 
        <!--tooltip script loppuu, eriytä-->
      </li>
    
    </ul>

  </nav>

<div class=" jumbotron jumbotron-fluid">
    <div class="container">
      <h2>Tässä on erittäin tärkeää tietoa, lue huolellisesti...</h2>
      <p>Bootstrap is the most popular HTML, CSS...</p>

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="1" class="active"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" src="kuvat/kirjajapollo.jpg" alt="Kirja1" width="100" height="100">          
          </div>
          <div class="carousel-item">
            <img class="d-block" src="kuvat/kirjajapollo.jpg" alt="Kirja2" width="100" height="100">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="kuvat/kirjajapollo.jpg" alt="Kirja3" width="100" height="100">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>

  <!--Main layout start-->
  <main class="container-fluid">
    <div class="card-deck">
      <div class="card">
        <img src="kuvat/kirjapoydalla.jpg" alt="#">
        <div class="card-body">
          <h4 class="card-title">Myytävä kirja</h4>
          <p class="card-text">Hyvä kuntoinen kirja, kuin uusi. Hyvä kuntoinen kirja, kuin uusi.</p><br>
          <p><a href="ilmoitukset.php">Katso tiedot</a></p>
        </div>
      </div>
        <div class="card">
          <img src="kuvat/kirjapoydalla.jpg" alt="#">
          <div class="card-body">
            <h4 class="card-title">Myytävä kirja</h4>
            <p class="card-text">Hyvä kuntoinen kirja, kuin uusi. Hyvä kuntoinen kirja, kuin uusi.</p><br>
            <p><a href="ilmoittukset.php">Katso tiedot</a></p>
          </div>
        </div>  
        <div class="card">
          <img src="./kuvat/kirjapoydalla.jpg" alt="#">
          <div class="card-body">
            <h4 class="card-title">Myytävä kirja</h4>
            <p class="card-text">Hyvä kuntoinen kirja, kuin uusi. Hyvä kuntoinen kirja, kuin uusi.</p><br>
            <p><a href="ilmoitus.php">Katso tiedot</a></p>
          </div>
        </div>
    </div>
  </main>
  <!--Main layout stop-->
  <hr>

<?php require "partials/footer.php"; ?>