<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palaute vastaanotettu | Rengaskauppa</title>
  <link rel="stylesheet" href="tyyli.css">
</head>
<body>
  <div class="page">
    <header class="site-header">
      <h1 class="brand">RENGASKAUPPA</h1>
      <p class="sub">Laadukkaat renkaat joka säähän – edullisesti ja nopeasti.</p>
      <?php include "menu.php"; ?>
    </header>
    <main class="container">
      <section class="card center-block">
        <?php
          if (isset($_POST['laheta'])) {
              $nimi = htmlspecialchars($_POST['nimi']);
              $aihe = htmlspecialchars($_POST['aihe']);
              $viesti = htmlspecialchars($_POST['viesti']);
              echo "<h2>Kiitos palautteestasi, $nimi!</h2>";
              echo "<p><strong>Aihe:</strong> $aihe</p>";
              echo "<p><strong>Viestisi:</strong></p>";
              echo "<p>$viesti</p>";
              echo "<p>Vastaamme sinulle mahdollisimman pian.</p>";
          } else {
              echo "<p>Virhe: lomakkeen tietoja ei vastaanotettu.</p>";
          }
        ?>
      </section>
    </main>
    <footer class="site-footer">© 2025 Rengaskauppa</footer>
  </div>
</body>
</html>