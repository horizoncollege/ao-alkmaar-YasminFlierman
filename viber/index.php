<?php
session_start();
include_once('functions.php');
$dsn = dbConnect();
$userID = $_SESSION['id'];


if (isset($_SESSION['id']) || isset($_GET['id'])) {
    $userQuery = $dsn->prepare("SELECT username, geslacht FROM users WHERE userID = :id");
    $userQuery->bindParam(":id", $userID);
    $userQuery->execute();
    $user = $userQuery->fetch();

    $username = $user['username'];
    session_destroy();
} else {
    header('Location: account/accLogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, <?php echo $username;?></title>
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
                <button class="dropbtn"><a id="home_link" href="index.php?id=<?php echo $userID;?>">Home</a></button>
                <div class="dropdown">
                    <button class="dropbtn"><a class="dropdownHead" href="dames/damesPage.php?id=<?php echo $userID;?>">Dames</a></button>
                    <div class="dropdown-content">
                        <a class="dropdownContent" href="dames/damesPage.php?id=<?php echo $userID;?>">Dames Kleding</a>
                        <a class="dropdownContent" href="dames/damesSchoenen.php?id=<?php echo $userID;?>">Dames Schoenen</a>
                        <a class="dropdownContent" href="dames/damesAcco.php?id=<?php echo $userID;?>">Dames Accosiores</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a href="heren/mannen_page.php?id=<?php echo $userID;?>">Heren</a></button>
                    <div class="dropdown-content">
                        <a href="heren/mannen_page.php?id=<?php echo $userID;?>">Heren Kleding</a>
                        <a href="heren/herenschoenen.php?id=<?php echo $userID;?>">Heren Schoenen</a>
                        <a href="heren/herenacco.php?id=<?php echo $userID;?>">Heren Accosiores</a>
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
            <div id="kledingrek_afb">
                <img src="img/websiteDesign/kledingrek_cut.jpg" alt="kledingrek">
            </div>
            <div id="kleding_items_top">
                <div id="kleding_item1">
                    <img src="img/websiteDesign/mannentrui_wit.jpg" alt="mannentrui_wit">
                    <p>Heren</p>
                </div>
                <div id="kleding_item2">
                    <img src="img/websiteDesign/viber_contact.jpg" alt="viber_contact">
                </div>
                <div id="kleding_item3">
                    <img src="img/websiteDesign/vrouwentrui_wit.jpg" alt="vrouwentrui_wit">
                    <p>Dames</p>
                </div>
            </div>
            <div id="kleding_items_bottom">
                <div id="kleding_item4">
                    <img src="img/websiteDesign/mannen_schoenen.jpg" alt="mannen_schoenen">
                    <p>Heren schoenen</p>
                </div>
                <div id="kleding_item5">
                    <img src="img/websiteDesign/mannen_sieraden.jpg" alt="Heren_accessoires">
                    <p>Heren accessoires</p>
                </div>
                <div id="kleding_item6">
                    <img src="img/websiteDesign/vrouwen_schoenen.jpg" alt="vrouwen_schoenen">
                    <p>Vrouwen schoenen</p>
                </div>
                <div id="kleding_item7">
                    <img src="img/websiteDesign/vrouwen_sieraden.jpg" alt="vrouwen_accessoires">
                    <p>Vrouwen accessoires</p>
                </div>
            </div>
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