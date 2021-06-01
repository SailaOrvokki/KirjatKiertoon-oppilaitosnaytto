<?php
require_once "database/connection.php";
require_once "database/models/users.php";

// rekisteröitymisen kontrollointi, annettavien tietojen tulee täsmätä register.view.php-tiedostoon
function registerController(){
    if(isset(
        $_POST['etunimi'],
        $_POST['sukunimi'],  
        $_POST['puhnro'],
        $_POST['email'],
        $_POST['salasana'],
        $_POST['hyväksyn'])){
            $lastname = $_POST['sukunimi'];
            $firstname = $_POST['etunimi'];
            $phonenumber = $_POST['puhnro'];
            $username = $_POST['email'];
            $password = $_POST['salasana'];
            $approve = $_POST['hyväksyn'];
        $pdo = connectDB();
        try {
            addUser($pdo, $lastname, $firstname, $phonenumber, $username, $password);
            header("Location: /login"); 
        } catch (PDOException $e){
            echo "Virhe tietokantaan tallennettaessa: " . $e->getMessage();
        }
    } else {
        require "views/register.view.php";
    }
}
// kirjautumisen kontrollointi
function loginController(){
    //echo "testi";
    if(isset($_POST['email'], $_POST['salasana'])){
        $username = $_POST['email'];
        $password = $_POST['salasana'];
        $pdo = connectDB();
        $result = login($pdo, $username, $password);
        if($result){
            echo "Tervetuloa, ";
            $_SESSION['email'] = $result['email'];
            $_SESSION['käyttäjäid'] = $result['käyttäjäid'];
            $_SESSION['session_id'] = session_id();
            header("Location: /user"); 
        } else {
            echo "Kirjautuminen ei onnistu";
            echo var_dump ($result);

            require "views/login.view.php";
        }
    } else {
        echo "Kirjautuminen onnistui";
       require "views/login.view.php";
    }
}
// uloskirjautumisen kontrollointi
function logoutController(){
    session_unset(); //poistaa kaikki muuttujat
    session_destroy();
    setcookie(session_name(),'',0,'/'); //poistaa evästeen selaimesta
    session_regenerate_id(true);
    header("Location: /"); // forward eli uudelleenohjaus
    die();
}