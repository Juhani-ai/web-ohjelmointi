<?php /* Etusivu */ ?>
<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Etusivu – Rengaskauppa</title>
  <link rel="stylesheet" href="tyyli.css" />
</head>
<body>
<div class="page">
  <header class="site-header">
    <h1>RENGASKAUPPA</h1>
    <p class="sub">Laadukkaat renkaat joka säähän – edullisesti ja nopeasti.</p>
    <?php include 'menu.php'; ?>
  </header>

  <main class="container">
    <section class="card hero">
      <h2>TERVETULOA!</h2>
      <p>Selaa valikoimaa ja kysy tarjousta – vastaamme nopeasti.</p>
      <div class="actions">
        <a class="btn btn-primary" href="tuotteet.php">Selaa tuotteita</a>
        <a class="btn" href="yhteystiedot.php">Ota yhteyttä</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">© 2025 Rengaskauppa</footer>
</div>
</body>
</html>
