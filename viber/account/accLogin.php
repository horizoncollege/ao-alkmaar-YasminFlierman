<?php 

session_start();
$count = $_SESSION['count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../sidebars.css">
    <link rel="stylesheet" href="../loggedout.css">
    <link rel="stylesheet" href="../footer.css">
</head>

<body>
    <!-- include de navbar -->
    <div class="navbar" id="navbar">
        <div id="logo_afb">
            <!-- Creating a link to the logo -->
            <img src="https://cdn.discordapp.com/attachments/1077908220879839237/1087678010091638824/logo.jpg" alt="logo">
        </div>
    </div>
    <div id="content_en_sidebars">
        <div id="sidebar_links"></div>
        <div id="content">
            <div class="main">
                <h1><i>LOGIN</i></h1>
                <div class="form">
                    <form action="loginHandler.php" method="POST">
                        <h4><i>Email:</i></h4>
                        <input class="inputField" type="email" name="email" required placeholder="example@email.com">
                        <h4><i>Wachtwoord:</i></h4>
                        <input class="inputField" type="password" name="pass" required placeholder="password"><br>
                        <button class="btnReg" type="submit" name="confirm" class="headText">LOGIN</button>
                    </form>
                    <?php
                    
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                    }
                    ?>
                </div>
                <div class="btnAll">
                    <button class="btnReg" type="button">
                        <!-- button naar de registratie pagina -->
                        <a href="#">
                            REGISTREREN
                        </a>
                        <script>console.log("<?php echo $count;?>");</script>
                    </button>
                </div>
            </div>
        </div>

        <div id="sidebar_rechts"></div>
    </div>
    <?php include_once('../footer.php'); ?>
</body>

</html>