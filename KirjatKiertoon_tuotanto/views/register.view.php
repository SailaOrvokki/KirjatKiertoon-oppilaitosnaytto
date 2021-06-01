<?php require "partials/loggedhead.php"; ?>



<!-- Rekisteröityminen alkaa -->
<div class="container">
 <div id="henkilotiedot">
    <form action="/register" method="post">
      <h1>Rekisteröidy</h1>
        <p>Saadaksesi tilin, on sinun annettava lomakkeella pyydettävät tiedot.</p>
      <hr>
      <div>
        <h5>Henkilötiedot</h5>
        <label for="etunimi"><b>Etunimi</b></label>
          <input type="text" placeholder="Anna etunimesi" name="etunimi" id="etunimi" required>
        <label for="sukunimi"><b>Sukunimi</b></label>
          <input type="text" placeholder="Anna sukunimesinimesi" name="sukunimi" id="sukunimi" required>
        <label for="puhnro"><b>Sukunimi</b></label>
          <input type="text" placeholder="Anna puhelinnumerosi" name="puhnro" id="puhnro" required>
        <label for="email"><b>Sähköposti, toimii käyttäjätunnuksena</b></label>
          <input type="text" placeholder="Anna sähköpostiosoitteesi" name="email" id="sahkoposti" required>
        <label for="salasana"><b>Salasana</b></label>
          <input type="password" placeholder="Anna salasana" name="salasana" id="salasana" required>
        <!-- <hr> -->
        <!-- <h5>Kirjautumistiedot</h5>
         <label for="email"><b>Varmista sähköpostisi</b></label>
            <input type="text" placeholder="Varmista sähköpostiosoiteesi antamalla se uudelleen" name="email" id="toistasahkoposti" required>
         -->
          <!-- <label for="toistasalasana"><b>Toista salasana</b></label>
            <input type="password" placeholder="Toista salasana" name="salasana" id="toistasalasana" required> -->
      </div>
      <hr><!-- Tekee viivan -->

      <!-- Kysytään luvat -->

      <div class="signin" id="info">
        <h5>Luvat ja hyväksyminen</h5>
        <p>Luodakseni tilin, hyväksyn säännöt <a href="#">Terms & Privacy</a>.</p>
        <span class="form-checkbox-item"></span>
          <input type="checkbox" class="form-checkbox" id="#" name="hyväksyn" value="Hyväksyn säännöt." required="">
            <label id="#" > Hyväksyn säännöt. </label>
      </div>
      <hr>
        <button type="submit" class="registerbtn">Rekisteröidy</button>
        <p>Sinulla on jo tili? <a href="login">Kirjaudu</a></p>
      </div>
    </form>
</div>
<!-- Rekisteröityminen loppuu -->

  <hr>
  <?php require "partials/footer.php"; ?>