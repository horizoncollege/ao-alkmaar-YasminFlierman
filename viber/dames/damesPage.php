<?php

//gebruikers email adres ophalen vanuit de database

include_once('../functions.php');
$dsn = dbConnect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dames.css">
    <link rel="stylesheet" href="../sidebars.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <title>Dames Pagina</title>
</head>

<body>
    <!-- Hier komt de navigatiebalk -->
    <?php include('../navbar.php'); ?>

    <!-- Hier komt de content -->

    <!-- Code voor de linker sidebar -->
    <div id="content_en_sidebars">
        <div id="sidebar_links">sidebar links</div>

        <!-- code voor de content -->
        <div id="content">
            <div id="good_afb">
                <img src="../img/websiteDesign/green.png" alt="good-vibes-only">
            </div>

            <div>
                <img src="" alt="">
            </div>

            <div id="items">
                <div id="item">
                    <!-- Hier komt een foreach loop die de producten uit de database uitprint. -->
                </div>
            </div>
        </div>

        <!-- code voor de rechter sidebar -->
        <div id="sidebar_rechts">sidebar rechts</div>
    </div>



    <!-- Hier komt de footer -->
    <?php include('../footer.php'); ?>
</body>

</html>