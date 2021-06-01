<?php

// Luodaan uusi käyttäjä
function addUser($pdo, $firstname, $lastname, $phonenumber, $username, $password){
    $cleanfirstname = cleanUpInput($firstname);
    $cleanlastname = cleanUpInput($lastname);
    $cleanphonenumber = cleanUpInput($phonenumber);
    $cleanusername =  cleanUpInput($username);
    $hashedpassword = hashPassword($password);
    $data = [$cleanlastname, $cleanfirstname,$cleanphonenumber, $cleanusername, $hashedpassword];
    $sql = "INSERT INTO käyttäjä (sukunimi, etunimi, puhnro, email, salasana) VALUES(?,?,?,?,?)";
    $stm=$pdo->prepare($sql);
    return ($stm->execute($data));
}

function login($pdo, $username, $password){
    $cleanusername = cleanUpInput($username);
    $sql = "SELECT * FROM käyttäjä WHERE email=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$cleanusername]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    echo var_dump($user);
    if ($user){
    $hashedpassword = $user["salasana"];

echo $hashedpassword;
echo " ";
echo $password;

    if(password_verify($password, $hashedpassword)){
    echo var_dump($user);
        return $user;}
    else 
        return false;
} else {
    echo "Ei löydy";
    return false;
}
}
