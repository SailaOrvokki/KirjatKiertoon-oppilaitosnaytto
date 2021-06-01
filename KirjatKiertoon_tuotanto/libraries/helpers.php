<?php

function cleanDump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
// tyhjentää sisäänmenon
function cleanUpInput($userinput){
    $input = trim($userinput);
    $cleaninput = filter_var($input,FILTER_SANITIZE_STRING);
    return $cleaninput;
}
// tyhjentää ulostulon
function cleanUpOutput($useroutput){
    $output = trim($useroutput);
    $cleanoutput = htmlspecialchars($output);
    return $cleanoutput;
}
// "sotkee" salasanan
function hashPassword($password){
    $password = trim($password);
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    return $hashedpassword;
}

function isLoggedIn(){
    if(isset($_SESSION['email'], $_SESSION['käyttäjäid']) && ($_SESSION['session_id'] == session_id())){
        return true;
    } else {
        return false;
    }
}


