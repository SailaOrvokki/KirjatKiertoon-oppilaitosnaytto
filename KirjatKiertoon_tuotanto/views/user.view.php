<?php require "partials/loggedhead.php"; ?>
<?php require_once "libraries/Helpers.php"; ?> 




<div class="container">
<h2>User view</h2>
  <h2>Tervetuloa omille sivuillesi</h2>
    <p>Valitse mitä haluat tehdä</p>
    
    <div class="card-deck">
      <div class="card">
     
        <div class="card-body">
          <h4 class="card-title">Omat ilmoitukset</h4>
          <p class="card-text">Täältä löydät omat olmoituksesi</p><br>
          <p><a href="/ilmoitukset">Katso tiedot</a></p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Viestit</h4>
          <p class="card-text">Täältä löydät saapuneet ja lähetetyt viestisi</p><br>
          <p><a href="usersviesti.view.php">Katso tiedot</a></p>
        </div>
      </div>  

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Omat tiedot</h4>
          <p class="card-text">Täältä löydät omat tietosi ja voit päivittää niitä</p><br>
          <p><a href="#">Katso tiedot</a></p>
        </div>
      </div>
    </div>
    <!-- <form class="kirjautumistiedot" action="/logout" method="post"></form> -->
  <hr>

  <?php require "partials/footer.php"; ?>