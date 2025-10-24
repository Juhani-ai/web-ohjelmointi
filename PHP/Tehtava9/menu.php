<?php
// Yksinkertainen generoitava navigaatio pill-napeilla
$valikko = [
  'Etusivu'      => 'index.php',
  'Tuotteet'     => 'tuotteet.php',
  'Yhteystiedot' => 'yhteystiedot.php',
  'Palaute'      => 'palaute.php'
];
$current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
echo '<nav class="nav"><ul>';
foreach ($valikko as $nimi => $linkki) {
  $isActive = (basename($linkki) === $current) ? 'active' : '';
  $aria = $isActive ? ' aria-current="page"' : '';
  echo "<li><a class=\"pill $isActive\" href=\"$linkki\"$aria>$nimi</a></li>";
}
echo '</ul></nav>';
