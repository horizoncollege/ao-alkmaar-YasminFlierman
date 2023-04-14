<html>

<head>
    <title>Steen, Papier, Schaar</title>
</head>

<body>
    <?php
    // probleem opgelost
    session_start();
    $_SESSION["keuze_speler_2"] = $_GET["keuze"];

    if (
        $_SESSION["keuze_speler_1"] == "steen" && $_SESSION["keuze_speler_2"] == "steen" ||
        $_SESSION["keuze_speler_1"] == "papier" && $_SESSION["keuze_speler_2"] == "papier" ||
        $_SESSION["keuze_speler_1"] == "schaar" && $_SESSION["keuze_speler_2"] == "schaar"
    ) {
        echo "<h1>Gelijk spel!</h1>";
        echo "<h4> Speler 1 koos voor: " . $_SESSION["keuze_speler_1"] . "</h4>";
        echo "<h4> Speler 2 koos voor: " . $_SESSION["keuze_speler_2"] . "</h4>";
    } elseif (
        $_SESSION["keuze_speler_1"] == "steen" && $_SESSION["keuze_speler_2"] == "schaar" ||
        $_SESSION["keuze_speler_1"] == "papier" && $_SESSION["keuze_speler_2"] == "steen" ||
        $_SESSION["keuze_speler_1"] == "schaar" && $_SESSION["keuze_speler_2"] == "papier"
    ) {
        echo "<h1>Speler 1 heeft gewonnen!</h1>";
        echo "<h4> Speler 1 koos voor: " . $_SESSION["keuze_speler_1"] . "</h4>";
        echo "<h4> Speler 2 koos voor: " . $_SESSION["keuze_speler_2"] . "</h4>";
    } elseif (
        $_SESSION["keuze_speler_1"] == "steen" && $_SESSION["keuze_speler_2"] == "papier" ||
        $_SESSION["keuze_speler_1"] == "papier" && $_SESSION["keuze_speler_2"] == "schaar" ||
        $_SESSION["keuze_speler_1"] == "schaar" && $_SESSION["keuze_speler_2"] == "steen"
    ) {
        echo "<h1>Speler 2 heeft gewonnen!</h1>";
        echo "<h4> Speler 1 koos voor: " . $_SESSION["keuze_speler_1"] . "</h4>";
        echo "<h4> Speler 2 koos voor: " . $_SESSION["keuze_speler_2"] . "</h4>";
    }
    //alle issues zijn opgelost, dit staat er alleen zodat ik het opnieuw kan inleveren
    ?>
    <a href="index.php">Klik hier om opnieuw te beginnen</a>

</body>

</html>