<?php
$tuntipalkka = $_POST['tuntipalkka'] ?? 0;
$tuntimaara = $_POST['tuntimaara'] ?? 0;
$viikonloppulisa = $_POST['viikonloppulisa'] ?? 0;
$viikonlopputunnit = $_POST['viikonlopputunnit'] ?? 0;

$yhteispalkka = $tuntipalkka * $tuntimaara;
$yhteispalkka_viikonlopuilla = $yhteispalkka + ($viikonloppulisa * $viikonlopputunnit);

echo "Yhteispalkka ilman viikonloppulisiä: $yhteispalkka € <br>";
echo "Yhteispalkka viikonloppulisien kanssa: $yhteispalkka_viikonlopuilla €";
?>
