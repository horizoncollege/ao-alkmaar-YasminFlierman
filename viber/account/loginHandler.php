<?php

include_once('../functions.php');
$dsn = dbConnect();
if (isset($_SESSION['count'])) {
    $count = $_SESSION['count'];
} else {
    $count = 0;
}

if (isset($_POST['confirm'])) {
    // Haalt het email en wachtwoord uit de form
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // bereid de query voor
    $userID_query = $dsn->prepare("SELECT userID FROM users WHERE email = :email AND password = :pass");
    $userID_query->bindParam(":email", $email);
    $userID_query->bindParam(":pass", $password);
    //voert de PDO query uit en haalt de informatie uit de Database op onder de naam $userID
    $userID_query->execute();
    $userID = $userID_query->fetch();

    //Als de gebruiker te vinden is in de database
    if (!empty($userID)) {
        // Start een session met de Session naam "id" en stuurt de gebruiker met zijn/haar $userID door naar de index.php pagina
        session_start();
        $_SESSION['id'] = $userID;
        header("Location: ../index.php");
        //Als de database de gebruiker niet kan vinden begint de counter met tellen
    } elseif (empty($userID)) {
        $count++;
        session_start();
        $_SESSION['error'] = "<h5>Ongeldige email of wachtwoord</h5>";
        $_SESSION['count'] = $count;
        header('Location: accLogin.php');
        //Als de counter gelijk staat aan 3 dan wordt de gebruiker doorverwezen naar de registratie pagina
    } elseif ($count == 3) {
        header('Location: '); //registatie.php
    }
}
?>