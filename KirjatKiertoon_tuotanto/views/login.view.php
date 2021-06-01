<?php require "partials/head.php"; ?>


<!-- Kirjautuminen alkaa -->
<div class="container">
  <div id="kirjautumistiedot">
  <!-- action = "/login", tiedot tu/controllers/userManagement.php-tiedostosta -->
  <form class="kirjautumistiedot" action="/login" method="post">
    <h1>Kirjaudu</h1>
      <p>Kirjautuaksesi sivuille, anna lomakkeella pyydetyt tiedot</p>
      <hr>
      <div>
      <h5>Kirjautumistiedot</h5>
      <label for="email"><b>Sähköposti</b></label>
      <input type="text" placeholder="Anna sähköpostiosoitteesi" name="email" required>

      <label for="psw"><b>Salasana</b></label>
      <input type="password" placeholder="Anna salasanasi" name="salasana" required>

      <!-- <label for="psw-repeat"><b>Toista salasana</b></label>
      <input type="password" placeholder="Repeat Password" name="salasana" required>     -->
      <!-- <label>
        <input type="checkbox" checked="checked" name="muista" style="margin-bottom:15px"> Muista minut
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

      </div>
    </div>
    <hr>
        <button type="submit" class="registerbtn">Kirjaudu</button>
        <p>Ei tiliä? Rekisteröidy tästä <a href="register">Rekisteröidy</a></p>
      </div>
  </form>
</div>

<!-- Kirjautuminen loppuu -->

<?php require "partials/footer.php"; ?>