<?php require "partials/head.php"; ?>



<div class=" jumbotron jumbotron-fluid">
    <div class="container">


    <h2>Etusivu..</h2>
      
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
          <p><a href="ilmoitus.view.php">Katso tiedot</a></p>
        </div>
      </div>
        <div class="card">
          <img src="kuvat/kirjapoydalla.jpg" alt="#">
          <div class="card-body">
            <h4 class="card-title">Myytävä kirja</h4>
            <p class="card-text">Hyvä kuntoinen kirja, kuin uusi. Hyvä kuntoinen kirja, kuin uusi.</p><br>
            <p><a href="#">Katso tiedot</a></p>
          </div>
        </div>  
        <div class="card">
          <img src="./kuvat/kirjapoydalla.jpg" alt="#">
          <div class="card-body">
            <h4 class="card-title">Myytävä kirja</h4>
            <p class="card-text">Hyvä kuntoinen kirja, kuin uusi. Hyvä kuntoinen kirja, kuin uusi.</p><br>
            <p><a href="#">Katso tiedot</a></p>
          </div>
        </div>
    </div>
  </main>
  <!--Main layout stop-->
  <hr>

  <?php require "partials/footer.php"; ?>