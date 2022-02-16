<?php
    session_start();

    if(!isset($_SESSION['loggedin']) ) {
    header('Location: login.php');
};
if ($_SESSION['loggedin'] !== true) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4.1. User</title>
    <link rel="stylesheet" href="/styles.css">

</head>
<body>
<h1>Welcome!</h1>
<a href="logoff.php">Logoff</a>


    
</body>
</html>