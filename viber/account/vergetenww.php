<?php

include_once('../functions.php');
$dsn = dbConnect();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord vergeten</title>
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../sidebars.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <?php
    include_once('../functions.php');
    $dsn = dbConnect();
    ?>
    <?php
    include("../navbar.php")
    ?>

    <div id="content_en_sidebars">
        <div id="sidebar_links"></div>

        <div id="content">
            <div id="inhoud">
                <h1><i>Wachtwoord vergeten</i></h1>
            </div>
            <div id="inhoud">
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="email"><br><br>
                    <input name="pass" id="knop" type="password" placeholder="nieuw wachtwoord"><br><br>
                    <input name="confpass" id="knop" type="password" placeholder="confirm nieuw wachtwoord"><br><br>
                    <button id="knop" name="confirm" href="#">opslaan</button><br><br>
                </form>
            </div>

            <?php

            if (isset($_POST['confirm'])) {
                $email = $_POST['email'];
                $newpass = $_POST['pass'];
                $confirmpass = $_POST['confpass'];
                if ($confirmpass == $newpass) {

                    $stmt = $dsn->prepare("UPDATE users SET password = :newpass WHERE email = :email");
                    $stmt->bindParam(":newpass", $newpass);
                    $stmt->bindParam(":email", $email);
                    $stmt->execute();
                
                } else {
                    echo "wachtwoord is niet het zelfde";
                }
            }
            ?>
        </div>


        <div id="sidebar_rechts"></div>
    </div>

    <?php include('../footer.php'); ?>

</body>

</html>