<?php

function getAllMail($pdo){
    $sql = "SELECT vieti FROM kirjailmoitus";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function addMail($pdo, $etuniminimi, $sukunimi, $maa, $viesti, $käyttäjäid){
    $cleanetunimi = cleanUpInput($etunimi); 
    $cleansukunimi = cleanUpInput($sukunimi);
    $cleanmaa = cleanUpInput($maa);
    $cleanviesti = cleanUpInput($viesti);
    $cleanperson = cleanUpInput($käyttäjäid);
    $data = [$cleanetunimi, $cleansukunimi, $cleanmaa, $cleanviesti, $cleanperson];
    $sql = "INSERT INTO kirjailmoitus (viesti,) VALUES(?)";
    $stm=$pdo->prepare($sql);
    return $stm->execute($data);
}

function getMailById($pdo, $kirjailmoitusid){
    $sql = "SELECT * FROM kirjailmoitus WHERE kirjailmoitusid=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$id]);
    $all = $stm->fetch(PDO::FETCH_ASSOC);
    return $all;
}

function deleteMail($pdo, $kirjailmoituid){
    $sql = "DELETE FROM kirjailmoitus WHERE kirjailmoitusid=?";
    $stm=$pdo->prepare($sql);
    return $stm->execute([$id]);
}
