<!doctype html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <title>Yksinkertainen hintalaskuri</title>
</head>
<body>
<h1>Yksinkertainen hintalaskuri</h1>

<?php
$tuote       = "Sähköpotkulauta";
$hinta_kpl   = 349.90;     // 349,90 €
$kpl         = 2;
$alennus_pros= 15;         // %

$valisumma   = $hinta_kpl * $kpl;                        // 699.80
$alennus_eur = round($valisumma * $alennus_pros / 100, 2); // 104.97
$loppu       = $valisumma - $alennus_eur;                // 594.83

function eur($n){ return number_format($n, 2, ',', ' ') . ' €'; }

echo "Tuote: $tuote<br>";
echo "Hinta per kappale: " . eur($hinta_kpl) . "<br>";
echo "Kappalemäärä: $kpl<br><br>";
echo "Välisumma: " . eur($valisumma) . "<br>";
echo "Alennus ($alennus_pros%): " . eur($alennus_eur) . "<br><br>";
echo "<b>Lopullinen hinta: " . eur($loppu) . "</b>";
?>

</body>
</html>
