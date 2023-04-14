<html>

<head>
    <title>Steen, Papier, Schaar</title>
</head>

<body>
    <h1>Speler 2: Maak je keuze</h1>
    <form action="game.php" method=get>
        <button type="submit" name="keuze" value="steen">
            <img src="afbeeldingen/steen.png" alt="steen" style="width:150px;height:150px;">
        </button>

        <button type="submit" name="keuze" value="papier">
            <img src="afbeeldingen/papier.png" alt="papier" style="width:150px;height:150px;">
        </button>

        <button type="submit" name="keuze" value="schaar">
            <img src="afbeeldingen/schaar.png" alt="schaar" style="width:150px;height:150px;">
        </button>
    </form>
    <?php
    session_start();
    $_SESSION["keuze_speler_1"] = $_GET["keuze"];
    ?>
</body>

</html>