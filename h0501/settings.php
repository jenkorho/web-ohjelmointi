
<?php

$server = 'db';
$username = 'root';
$password = 'password';
$db = 'jennan';

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Saattaa korjata mahdollisen ääkkösongelman
    $pdo->exec("SET NAMES 'utf8';");
    }
catch(PDOException $e)
    {

    echo "<p>Yhteys epäonnistui</p><p>" . $e->getMessage() . "</p>";
    }


//echo preparedQuery($sql,array($nimi,$hinta));

/* function preparedQuery($sql,$params) {
    for ($i=0; $i<count($params); $i++) {
      $sql = preg_replace('/\?/',$params[$i],$sql,1);
    }
    return $sql;
}
 */

?>