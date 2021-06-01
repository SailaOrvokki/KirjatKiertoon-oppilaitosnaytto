<?php require "partials/head.php"; ?>


<h2 class="centered">Kirjailmoitus</h2>

<div class = "kirja">
<?php
    foreach($allbook as $bookitem){
        echo "<div class='bookitem'>";
        echo "<h3>", $bookitem["nimi"], "</h3>";
        echo "<p>", $bookitem["kuvaus"], "</p>";
        echo "<img src=https://blogi.minduu.fi/blogi/wp-content/uploads/michal-grosicki-366027_1200-1080x675.png", $bookitem["kuva"], "/>";
        echo "<p>", $bookitem["myyntihinta"], "</p>";
        echo "<p>", $bookitem["maksutapa"], "</p>";
        echo "<p>", $bookitem["viesti"], "</p>";
        if(isLoggedIn() && ($bookitem["käyttäjäid"] == $_SESSION["käyttäjäid"])){
            $id = $bookitem['kirjailmoitusid'];
            $bookid = 'deleteBook' . $id;
            echo "<a id=$bookid onClick='confirmDelete($id)' href=/poista_kirja/$id>Poista</a>". " ";
            echo "<a href=/paivita_kirja/$id>Päivitä</a>";
        }
        echo "</div>";
    }
?>
</div>

<?php require "partials/footer.php"; ?>