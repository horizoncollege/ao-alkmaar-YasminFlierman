<?php
session_start();
include_once('functions.php');
$dsn = dbConnect();

// controleren of er een id is meegegeven
if (!isset($_GET['id'])) {
    die('Geen id meegegeven');
}

// ophalen van de film of serie met de opgegeven id
$id = $_GET['id'];


$query = "SELECT * FROM products WHERE id = :id";

$stmt = $dsn->prepare($query);
$stmt->execute(['id' => $id]);
$item = $stmt->fetch();

// controleren of het item is gevonden
if (!$item) {
    die('Item niet gevonden');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="sidebars.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <div class="navbar" id="navbar">
        <div id="logo_afb">
            <!-- Creating a link to the logo -->
            <a href="index.php"><img src="https://cdn.discordapp.com/attachments/1077908220879839237/1087678010091638824/logo.jpg" alt="logo"></a>
        </div>
        <div id="nav_linkjes">
            <ul>
                <button class="dropbtn"><a id="home_link" href="index.php">Home</a></button>
                <div class="dropdown">
                    <button class="dropbtn"><a class="dropdownHead" href="dames/damesPage.php">Dames</a></button>
                    <div class="dropdown-content">
                        <a class="dropdownContent" href="dames/damesPage.php">Dames Kleding</a>
                        <a class="dropdownContent" href="dames/damesSchoenen.php">Dames Schoenen</a>
                        <a class="dropdownContent" href="dames/damesAcco.php">Dames Accosiores</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="heren/mannen_page.php">Heren</a></button>
                    <div class="dropdown-content">
                        <a href="heren/mannen_page.php">Heren Kleding</a>
                        <a href="heren/herenschoenen.php">Heren Schoenen</a>
                        <a href="heren/herenacco.php">Heren Accosiores</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <!-- Hier komt de content -->

    <!-- Code voor de linker sidebar -->
    <div id="content_en_sidebars">
        <div id="sidebar_links">
        </div>
        <!-- code voor de content -->
        <div id="content">
          <h1><? echo $item['productName    '] ?></h1>  
        </div>
        <!-- code voor de rechter sidebar -->
        <div id="sidebar_rechts"></div>
    </div>



    <!-- Code voor de footer -->

    <div class="footer">
        <div class="footerContent">
            <img class="img" src="img/websiteDesign/account_logo.png" alt="accountlogo">
            <p>Uw account</p>
        </div>
        <div class="footerContent">
            <img class="img" src="img/websiteDesign/contact_logo.png" alt="contactlogo">
            <p>Contact</p>
        </div>
    </div>
</body>

</html>