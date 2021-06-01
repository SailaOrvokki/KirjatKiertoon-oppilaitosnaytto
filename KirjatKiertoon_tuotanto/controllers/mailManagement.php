<?php
require_once "database/connection.php";
require_once "database/models/mail.php";

// Näyttää kirjat ilman rekisteröitymistä
function viewMailController(){
    $pdo = connectDB();
    $allbooks = getAllMail($pdo);
    require "views/userviesti.view.php";    
}
// Kirjan lisääminen
function addMailController(){
    if(isset(
        $_POST['etunimi'], 
        $_POST['sukunimi'],
        $_POST['maa'], 
        $_POST['viesti'])){
            $etunimi = $_POST['etunimi'];
            $sukunimi = $_POST['sukunimi'];
            $kuva = $_POST['maa'];
            $viesti = $_POST['viesti'];
        $pdo = connectDB();
        $userid = $_SESSION["käyttäjäid"];
        addArticle($pdo, $etunimi, $sukunimi, $maa, $viesti, $käyttäjäid); 
        header("Location: /userviesti");    
    } else {
        require "views/user.view.php";
    }
}


function deleteMailController($id){
    try {
        $pdo = connectDB();
        deleteMail($pdo, $id);
    } catch (PDOException $e){
        echo "Virhe kirjailmoituksen poistettaessa: " . $e->getMessage();
    }

    $allbooks = getAllMail($pdo);

    header("location: /user.view");
    exit;
}





