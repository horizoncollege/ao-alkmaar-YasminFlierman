<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mannen.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../sidebars.css">

    <title>Heren kleding</title>
</head>

<body>
    <?php
    include_once('../functions.php');
    $dsn = dbConnect();

    "SELECT * FROM products WHERE id IS NOT NULL";
    ?>
    <!-- Hier komt de navigatiebalk -->
    <?php
    include('../navbar.php')
    ?>



    <!-- Hier komt de content -->

    <!-- Code voor de linker sidebar -->
    <div id="content_en_sidebars">
        <div id="sidebar_links"></div>

        <!-- code voor de content -->
        <div id="content">
            <div id="mannenbanner">
                <img src="mannen.png" alt="banner">
            </div>
            <a href="../detail.php?type=<?php echo $row["productName"]; ?>&id=<?php echo $row["id"]; ?>">Bekijk details</a>
        </div>

        <!-- code voor de rechter sidebar -->
        <div id="sidebar_rechts"></div>
    </div>



    <!-- Hier komt de footer -->

    <!-- code voor de footer-->
    <?php

    include('../footer.php');
    ?>
</body>

</html>