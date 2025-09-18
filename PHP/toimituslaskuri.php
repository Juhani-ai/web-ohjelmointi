<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Toimituskululaskuri</title>
</head>
<body>
    <h1>Toimituskululaskuri</h1>

    <?php
    // Funktio, joka laskee toimituskulut
    function laskeToimitus($toimitustapa) {
        switch ($toimitustapa) {
            case "Nouto":
                return 0.00;
            case "Postipaketti":
                return 6.90;
            case "Kotipaketti":
                return 12.50;
            default:
                return -1; // virheellinen syöte
        }
    }

    // Testataan valitulla toimitustavalla
    $valittu_tapa = "Kotipaketti"; // vaihda esim. "Nouto", "Kotipaketti", "Pizza"
    $hinta = laskeToimitus($valittu_tapa);

    // Tarkistetaan tulos
    if ($hinta != -1) {
        echo "Valittu toimitustapa: " . $valittu_tapa . "<br>";
        echo "Hinta: " . number_format($hinta, 2, ',', ' ') . " €";
    } else {
        echo "Virheellinen toimitustapa!";
    }
    ?>
</body>
</html>
