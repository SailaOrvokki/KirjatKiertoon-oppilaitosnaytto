<?php
require_once "database/connection.php";
require_once "database/models/article.php";

// Näyttää kirjat ilman rekisteröitymistä
function viewArticlesController(){
    $pdo = connectDB();
    $allbook = getAllArticles($pdo);
    require "views/ilmoitus.view.php";    
}
// Kirjan lisääminen
function addArticleController(){
    if(isset(
        $_POST['nimi'], 
        $_POST['kuvaus'],
        $_POST['kuva'], 
        $_POST['myyntihinta'], 
        $_POST['myyntiaika'],
        $_POST['viesti'])){
            $nimi = $_POST['nimi'];
            $kuvaus = $_POST['kuvaus'];
            $kuva = $_POST['kuva'];
            $myyntihinta = $_POST['myyntihinta'];
            $myyntiaika = $_POST['myyntiaika'];
            $viesti = $_POST['viesti'];
        $pdo = connectDB();
        $userid = $_SESSION["käyttäjäid"];
        addArticle($pdo, $nimi, $kuvaus, $kuva, $myyntihinta, $myyntiaika, $viesti, $käyttäjäid); 
        header("Location: /ilmoitus");    
    } else {
        require "views/kirjailmoitus.view.php";
    }
}

function editArticleController($id){
    $pdo = connectDB();
    try {
        $book = getArticleById($pdo, $id);
    } catch (PDOException $e){
        echo "Virhe uutista haettaessa: " . $e->getMessage();
    }
    
    if($book){
        $id = $book['kirjailmoitusid'];
        $nimi = $_POST['nimi'];
        $kuvaus = $_POST['kuvaus'];
        $kuva = $_POST['kuva'];
        $myyntihinta = $_POST['myyntihinta'];
        $myyntiaika = $_POST['myyntiaika'];
        $viesti = $_POST['viesti'];
        require "views/ilmoitus.view.php";
    } else {
      header("location: /user");
      exit;
    }
}

function updateArticleController($id){
    if(isset(
        $_POST['nimi'], 
        $_POST['kuvaus'],
        $_POST['kuva'], 
        $_POST['myyntihinta'], 
        $_POST['myyntiaika'],
        $_POST['viesti'])){
            $nimi = $_POST['nimi'];
            $kuvaus = $_POST['kuvaus'];
            $kuva = $_POST['kuva'];
            $myyntihinta = $_POST['myyntihinta'];
            $myyntiaika = $_POST['myyntiaika'];
            $viesti = $_POST['viesti']; 
        $pdo = connectDB();
        try{
            updateArticle($pdo, $nimi, $kuvaus, $kuva, $myyntihinta, $myyntiaika, $viesti, $käyttäjäid);
            header("Location: /");    
        } catch (PDOException $e){
                echo "Virhe kirjailmoituksen päivitettäessä: " . $e->getMessage();
        }
    } else {
        header("location: /ilmoitus");
        exit;
    }
}

function deleteArticleController($id){
    try {
        $pdo = connectDB();
        deleteArticle($pdo, $id);
    } catch (PDOException $e){
        echo "Virhe kirjailmoituksen poistettaessa: " . $e->getMessage();
    }

    $allbook = getAllArticles($pdo);

    header("location: /kirjailmoitukset");
    exit;
}





