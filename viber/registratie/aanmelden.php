<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmelden</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="regestratie.css">
    <link rel="stylesheet" href="../sidebars.css">
    <link rel="stylesheet" href="../loggedout.css">
    <link rel="stylesheet" href="../footer.css">
</head>

<body>
    <!-- include de navbar -->
    <div class="navbar" id="navbar">
        <div id="logo_afb">
            <!-- Creating a link to the logo -->
            <a href="../registratie.php"><img src="https://cdn.discordapp.com/attachments/1077908220879839237/1087678010091638824/logo.jpg" alt="logo"></a>
        </div>
    </div>
    <div id="content_en_sidebars">
        <div id="sidebar_links"></div>
        <div id="content">
            <div class="main">
                <img src="../img/websiteDesign/viber_contact.jpg" alt="logo" width="200" height="200">

                <form action="aanmelden_hanler.php" method="POST">
                    <label for="email"><i>E-mail:</i></label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="phone"><i>Telefoonnummer:</i></label><br>
                    <input type="tel" id="phone" name="phone" pattern="[0-10]{2}-[0-10]{8}"><br>
                    <label for="pwd"><i>Wachtwoord:</i></label><br>
                    <input type="password" id="pwd" name="pwd"><br>
                    <label for="pwd"><i>Wachtwoord:</i></label><br>
                    <input type="password" id="pwd" name="pwd"><br>
                    <br><button type="submit"><i>Volgende</i></button><br><br>
                </form>


            </div>
        </div>

        <div id="sidebar_rechts"></div>
    </div>
    <?php include_once('../footer.php'); ?>
</body>

</html>