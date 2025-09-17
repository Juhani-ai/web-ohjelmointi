<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ensimmäinen PHP-sivu</title>
</head>
<body>

  <p>Vuorokaudessa on <?php echo 24 * 60 * 60; ?> sekuntia.</p>
  <p>Tänään on <?php echo date('j.n.Y'); ?>.</p>
  <p>Palvelimella on PHP:n versio <?php echo PHP_VERSION; ?>.</p>

  <?php
  // FOR-esimerkki: listaa luvut 1–10
  echo "<ul>";
  for ($i = 1; $i <= 10; $i++) {
      echo "<li>$i</li>";
  }
  echo "</ul>";

  echo "<hr>";

  // WHILE-esimerkki: toista tervehdys 'kerrat' kertaa
  $greeting = "Iloista syksyä! 🍂";   // vaihda vuodenajan mukaan
  $times    = 5;                      // montako kertaa tulostetaan
  $n = 0;                              // laskuri WHILE-loopille

  echo "<p><strong>While-loop:</strong></p>";
  while ($n < $times) {
      echo $greeting . "<br>";
      $n++;  // muista kasvattaa, muuten jää ikiluuppiin
  }
  ?>

</body>
</html>
