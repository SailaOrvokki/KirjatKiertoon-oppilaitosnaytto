<?php

function getAllArticles($pdo){
    $sql = "SELECT * FROM kirjailmoitus";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function addArticle($pdo, $nimi, $kuvaus, $kuva, $myyntihinta, $myyntiaika, $viesti, $käyttäjäid){
    $cleantitle = cleanUpInput($nimi); 
    $cleantext = cleanUpInput($kuvaus);
    $cleanfoto = cleanUpInput($kuva);
    $cleanmaney = cleanUpInput($myyntihinta);
    $cleantime = cleanUpInput($myyntiaika);
    $cleanmessage = cleanUpInput($viesti);
    $cleanperson = cleanUpInput($käyttäjäid);
    $data = [$cleantitle, $cleantext, $cleanfoto, $cleanmaney, $cleantime, $cleanmessage, $cleanperson];
    $sql = "INSERT INTO kirjailmoitus (nimi, kuvaus, kuva, myyntihinta, myyntiaika, viesti, käyttäjäid) VALUES(?,?,?,?,?,?,?)";
    $stm=$pdo->prepare($sql);
    return $stm->execute($data);
}

function getArticleById($pdo, $kirjailmoitusid){
    $sql = "SELECT * FROM kirjailmoitus WHERE kirjailmoitusid=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$id]);
    $all = $stm->fetch(PDO::FETCH_ASSOC);
    return $all;
}

function deleteArticle($pdo, $kirjailmoituid){
    $sql = "DELETE FROM kirjailmoitus WHERE kirjailmoitusid=?";
    $stm=$pdo->prepare($sql);
    return $stm->execute([$id]);
}

function updateArticle($pdo, $nimi, $kuvaus, $kuva, $myyntihinta, $myyntiaika, $viesti, $käyttäjäid){
    $cleantitle = cleanUpInput($nimi); 
    $cleantext = cleanUpInput($kuvaus);
    $cleanfoto = cleanUpInput($kuva);
    $cleanmaney = cleanUpInput($myyntihinta);
    $cleantime = cleanUpInput($myyntiaika);
    $cleanmessage = cleanUpInput($viesti);
    $cleanperson = cleanUpInput($käyttäjäid);
    $data = [$cleantitle, $cleantext, $cleanfoto, $cleanmaney, $cleantime, $cleanmessage, $cleanperson];
    $sql = "UPDATE kirjailmoitus SET nimi = ?, kuvaus = ?, kuva = ?, myyntihinta = ?, myyntiaika = ?, viesti = ?, käyttäjäid = WHERE kirjailmoitusid = ?";
    $stm = $pdo->prepare($sql);
    return $stm->execute($data);
}