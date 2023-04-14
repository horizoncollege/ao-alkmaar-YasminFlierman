<html>

<head>
    <title>Steen, Papier, Schaar</title>
</head>

<body>
    <?php
    session_start();
    $rnd = rand(1, 3);
    $computerkeuze;
    if ($rnd == 1) {
        $computerkeuze = "steen";
    } elseif ($rnd == 2) {
        $computerkeuze = "papier";
    } elseif ($rnd == 3) {
        $computerkeuze = "schaar";
    }
    $_SESSION["keuze_speler_cpu"] = $_GET["keuze"];
    if (
        $computerkeuze == "steen" && $_SESSION["keuze_speler_cpu"] == "steen" ||
        $computerkeuze == "papier" && $_SESSION["keuze_speler_cpu"] == "papier" ||
        $computerkeuze == "schaar" && $_SESSION["keuze_speler_cpu"] == "schaar"
    ) {
        echo "<h1> Gelijk spel!</p>";
        echo "<h4>De computer had " . $computerkeuze . " gekozen.</h4>";
    } elseif (
        $computerkeuze == "steen" && $_SESSION["keuze_speler_cpu"] == "papier" ||
        $computerkeuze == "papier" && $_SESSION["keuze_speler_cpu"] == "schaar" ||
        $computerkeuze == "schaar" && $_SESSION["keuze_speler_cpu"] == "steen"
    ) {
        echo "<h1> Gewonnen!</h1>";
        echo "<h4>De computer had " . $computerkeuze . " gekozen.</h4>";
    } elseif (
        $computerkeuze == "steen" && $_SESSION["keuze_speler_cpu"] == "schaar" ||
        $computerkeuze == "papier" && $_SESSION["keuze_speler_cpu"] == "steen" ||
        $computerkeuze == "schaar" && $_SESSION["keuze_speler_cpu"] == "papier"
    ) {
        echo "<h1>Verloren!</h1>";
        echo "<h4>De computer had " . $computerkeuze . " gekozen.</h4>";
    }
    ?>
    <a href="index.php">Klik hier om opnieuw te beginnen</a>
</body>

</html>