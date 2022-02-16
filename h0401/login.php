<?php
    session_start();
    if(isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] === true) {
        header('Location: user.php');
    };
}
?>
<!DOCTYPE html>
<html lang="en">    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4.1. Login</title>    
    <link rel="stylesheet" href="/styles.css">

</head>
<body>

    <!--Tee yksinkertainen kirjautumissysteemi käyttäen sessioita (katso esimerkki).

Sessio-muuttujaan tallennetaan tieto, onko käyttäjä kirjautunut. Kirjautumisen voi tehdä yksinkertaisesti vain salasanalla ja oikean salasanan voi vaikka kovakoodata PHP-tiedostoon, jolla tarkastetaan, onko salasana oikein. Ei siis tarvitse olla käyttäjätunnusta.

Harjoituksessa tehdään neljä sivua. Yhdellä tai kahdellakin pärjäisi, mutta se on ehkä alussa vaikeampi toteuttaa:

1. Kirjautumissivulla on tekstikenttä, johon kirjoitetaan salasana.

2. “Salasanan tarkistus” -sivulla tarkistetaan, onnistuiko kirjautuminen. Jos salasana on oikein, tallennetaan tieto tästä sessio-muuttujaan ja siirretään käyttäjä automaattisesti ylläpitosivulle: header("Location:admin.php");

3. “ylläpitosivulla” tarkastetaan sessio-muuttujaa käyttäen, onko kirjauduttu. Jos on kirjauduttu, sivulle tulostetaan teksti: “Olet kirjautunut” ja linkki “Kirjaudu ulos”. Jos ylläpitosivulle yrittää päästä ilman, että on kirjauduttu, tulostetaan: “Et ole kirjautunut”.

4. Logout-sivulla muutetaan sessio-muuttujaa siten, että käyttäjä ei enää ole kirjautunut (esim. asetetaan arvo tyhjäksi). -->

<form action="auth.php" method="post">
    <label for="pwd">Anna salasana</label>
    <input type="password" name="pwd" id="pwd">
    <button type="submit">Kirjaudu</button>
</form>

<?php

if (isset($_GET['err'])) {

    $errormsg = htmlspecialchars($_GET['err']);

    echo $errormsg;
}


?>


</body>
</html>