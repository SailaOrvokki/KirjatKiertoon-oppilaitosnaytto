<?php require "partials/loggedhead.php"; ?>
<?php require_once "libraries/Helpers.php"; ?> 

<!-- Kirjan myynti-ilmoitus alkaa -->
<!-- https://www.w3schools.com/tags/att_input_type.asp -->

<div class="container" id="kirjailmoitustiedot">
    <h3>Kirjan myynti ilmoitus</h3>
    <hr>
    <h5>Ilmoittajan tiedot</h5>
    <!-- Henkilötiedot lomake -->
    <div class="lomaketiedot" id="kirjailmoitus">
        <!-- Ilmoituksen tekijän tulee olla kirjautunut, tiedot haetaan tietokannasta-->
        <form id="henkilotiedot" action="/userkirjailmoitus">
        <label for="fname">Etunimi</label>
            <input type="text" id="etunimi" name="etunimi" placeholder="Anna etunimesi..">
        <label for="sukunimi">Sukunimi</label>
            <input type="text" id="sukunimi" name="sukunimi" placeholder="Anna sukunimesi..">
        <label for="email">Sähköposti</label>
            <input type="text" id="email" name="" placeholder="Anna sähköpostiosoitteesi..">
    <hr>
    <h5>Kirjan tiedot</h5>
    <!-- Kirjatiedot lomake -->
    <form id="kirjatiedot" action="">
        <label for="kirjannimi">Kirjan nimi</label>
            <input type="text" id="kirjannimi" name="" placeholder="Anna kirjan nimi..">
        <label id="lataa">Lataa kuva</label>
            <input type="file" id="kirjatiedot" name="kuvat" multiple> <!--multiple = mhdollistaa useamman kuvan yhtäaikaisen lisäämisen -->
            <!-- <p>Poista kuva
            <a href="#"><span class="glyphicon glyphicon-trash"></span></a></p> Roskakorikuvake -->
        <br>
        <label>Ammattiala</label>
        <select id="ammattiala" name="ammattiala">
            <option value="Sähköala">Sähköala</option>
            <option value="Parturi- ja kampaamo">Parturi ja kampaamo</option>
            <option value="Tieto- ja viestintätekniikka">Tieto- ja viestintätekniikka</option>
        </select>
        <label for="subject">Kuvaus</label>
        <textarea id="subject" name="subject" placeholder="Kirjoita kirjasta kuvaus.." style="height:200px"></textarea>
    </form>
    <hr>

  <div id="kirjailmoitusohjeet">
      <div id="ohjetiedot">
        <p><span style="font-family: arial, helvetica, sans-serif; font-size: medium;"><strong>Ohjeet:</strong></span></p>
        <p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Kirjojen myynti-ilmoitukset ovat yksityisten henkilöiden tekemiä.</span></p>
        <p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Myyjä ja ostaja sopivat keskenään myyntitapahtumasta.</span></p>
        <p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Sivuston ylläpitäjä ei ole vastuussa kirjailmoituksista vaan vastuu on kirjailmoituksen jättäjällä.</span></p>
        <p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Ongelmien ilmetessä ole yhteydessä ylläpitäjään ongelma@kirjatkiertoon.fi</span></p>
        <hr>
        <span class="form-checkbox-item" style="clear:left"></span>
          <input type="checkbox" class="form-checkbox validate[required]" id="#" name="#" value="I agree with the posting policy." required="">
          <label id="#" > Hyväksyn ilmoituksen tiedot. </label>
    <div id="kirjailmoitus_nappi" class="form-input-wide"></div>
        <button onclick="buttonKirjailmoitus()" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Tallenna</button>
      </div>
    </div>
</div>
<!-- Tehdään popup-ilmoitus -->
<script>
function buttonKirjailmoitus() {
  var txt;
  if (confirm("Ilmoitus tehty")) {
    txt = "Tiedot päivitetty onnistuneesti";
  } else {
    txt = "Tarkista tiedot!";
  }
  document.getElementById("kirjailmoitu_nappi").innerHTML = txt;
}
</script>

</div>
<!-- Kirjan myynti-ilmoitus loppuu -->

<?php require "partials/footer.php"; ?>