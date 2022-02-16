<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H5.1.</title>
</head>
<body>

    <!--Tee HTML-lomake, jonka avulla käyttäjä voi lisätä tietoja tekemääsi tauluun. Ohjelmassa pitää olla tarkistus, joka esim. tarkistaa, ettei käyttäjä yritä syöttää vaikkapa kirjaimia syntymavuosi-kenttään, kirjoittaa virheellistä vuotta (esim. 2103 tai 194) jne. Ohjelma ilmoittaa mahdollisista virheistä. Lisäksi käyttäjä voi halutessaan tulostaa taulun tiedot.-->
<h1>Lisää tietoja tauluun!</h1>
<form action="addPerson.php" method="post">

    <input type="text" name="lastname" id="lastname">
    <input type="text" name="firstname" id="firstname">
    <input type="number" name="birthyear" id="birthyear">

    <button type="submit">Lähetä</button>

</form>

<?php

if(isset($_GET['msg'])) {
    $msg = htmlentities($_GET('msg'));

    echo '<p>' . $msg . '</p>';
}

?>

</body>
</html>


