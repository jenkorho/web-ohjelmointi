<?php
session_start();

$password = "123";

if (isset($_POST['pwd'])) {

    $userpassword = htmlspecialchars($_POST['pwd']);

    if ($userpassword === $password) {

        $_SESSION['loggedin'] = true;
        header('Location: user.php');

    }
    else {
        header('Location: login.php?err=Wrong password');
    }
}

else {
    header('Location: login.php?err=Type in password');
}

?>

