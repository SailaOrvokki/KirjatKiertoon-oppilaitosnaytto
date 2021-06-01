<!DOCTYPE html>
<html>

<head>
  <!--Ohjelmistosuunnitelun datanomin oppilaitosnäyttö-->
  <meta charset="utf-8">
  <meta name="description" content="Tyylitiedosto Kirjat Kiertoon sovellukselle, oppilaitosnäyttö">
  <meta name="keywords" content="HTML, CSS">
  <meta name="authot" content="Saila Hyvönen">
  <link rel="stylesheet" href="/css/tuotanto.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Kirjat Kiertoon tuotanto</title>

  <style>
    /* Siirretty KKtyyliopas.css tiedostoon */
  </style>
</head>
<body>

<!-- <script>
    function confirmDelete(id) {
        const answer = confirm("Poistetaanko uutinen?");
        if(!answer){
            document.getElementById('deleteNews' + id).href = '/uutiset';
        }
        return answer;
    }
</script> -->

  <!--Header and navigation start-->
  <div class="header">
    <div class="container-fluid p-3 my-3 text-white">
        <a class="navbar-brand" href="#">
          <img src="kuvat/logo.jpg" width="30" height="30" alt="Logo">
        </a>
        <a class="nav justify-content-end">
          <form class="form-inline" action="#">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Etsi</button>
          </form>
        </a>
      <h1>Kirjat Kiertoon</h1>
      <p>Oppikirjat kiertoon...</p>
      <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
    </div>
  </div>
 
 

<!-- Kirjautuneen käyttäjän hakunapit alkaa -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center sticky-top">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="/">Koti</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/kirjailmoitus">Ilmoitukset</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/usersviesti">Viestit</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/logout">Kirjaudu ulos</a> 
      </li>
 
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
<!-- Kirjautuneen käyttäjän hakunapit päättyy -->

