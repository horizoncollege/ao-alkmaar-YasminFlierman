<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="sidebars.css">

    <title>Winkelmandje</title>
</head>

<body>
    <?php
    include_once('../functions.php');
    $dsn = dbConnect();
    ?>
    <!-- Hier komt de navigatiebalk -->
    <?php
    include("../navbar.php")
    ?>



    <!-- Hier komt de content -->

    <!-- Code voor de linker sidebar -->
    <div id="content_en_sidebars">
        <div id="sidebar_links">sidebar links</div>

        <!-- code voor de content -->
        <div id="inhoud">
            <div id="content">
                <h1>winkelmandje</h1>
            </div>
            <div id="knoppen">
                <input readonly="readonly" id="knop" type="text">
                <button id="knop" href="#">afrekenen</button>
            </div>
        </div>
        <!-- code voor de rechter sidebar -->
        <div id="sidebar_rechts">sidebar rechts</div>
    </div>



    <!-- Hier komt de footer -->

    <!-- code voor de footer-->
    <?php include('../footer.php'); ?>

</body>

</html>