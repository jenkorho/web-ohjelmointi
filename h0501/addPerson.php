<?php include('settings.php');

if(isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['birthyear'])) {

//sanitointi

$ln = ucfirst(preg_replace("/[^A-Öa-ö\-]/", "", $_POST['lastname']));
$fn = ucfirst(preg_replace("/[^A-Öa-ö\-]/", "", $_POST['firstname']));
$by = intval($_POST['birthyear']);

//Checking correction of birthyear (assuming service doesnt register dead people)
if($by > date("Y") || $by < (date("Y")-140)) {
    exit('Anna syntymävuosi oikeassa muodossa');
}

$sql = "INSERT INTO harjoitus5 (sukunimi, etunimi, syntymavuosi) VALUES (?,?,?)";

//valmistellaan sql 
$stmt = $pdo->prepare($sql);

//toteutetaan
$stmt->execute([$ln,$fn,$by]);

$pdo->connection = null;

echo 'Lisäys onnistui';


}

?>