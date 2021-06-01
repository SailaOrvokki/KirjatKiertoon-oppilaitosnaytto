<?php require "partials/loggedhead.php"; ?>



<!-- Viestin kirjoittaminen alkaa -->
<div class="container">
<h3 id="vietiotsikko">Yhteydenottolomake</h3>

  <form action="/viesti" method="post">
    <label for="etunimi">Etunimi</label>
    <input type="text" id="etunimi" name="etunimi" placeholder="Your name..">

    <label for="sukunimi">Sukunimi</label>
    <input type="text" id="sukunimi" name="sukunimi" placeholder="Your last name..">

    <label for="maa">Maa</label>
    <select id="maa" name="maa">
      <option value="Suomi">Suomi</option>
      <option value="EU">EU</option>
      <option value="Muu">Muu</option>
    </select>

    <label for="viesti">Viesti</label>
    <textarea id="viesti" name="viesti" placeholder="Write something.." style="height:200px"></textarea>
    <div id="viesti"></div>
    <button onclick="buttonViesti()" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Lähetä</button>
  </form>

<!-- Tehdään popup-ilmoitus -->
<script>
function buttonViesti() {
  var txt;
  if (confirm("Viesti kirjoitettu")) {
    txt = "Viesti lähetetty onnistuneesti";
  } else {
    txt = "Tarkista tiedot!";
  }
  document.getElementById("lähetä_viesti").innerHTML = txt;
}
</script>

</div>
<!-- Viestin kirjoittaminen loppuu -->

<?php require "partials/footer.php"; ?>