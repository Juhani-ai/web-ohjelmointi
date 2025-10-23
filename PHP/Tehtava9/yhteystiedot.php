<?php /* yhteystiedot.php */ ?>
<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8" />
  <title>Yhteystiedot · Rengaskauppa</title>
  <link rel="stylesheet" href="tyyli.css" />
</head>
<body>
  <header class="site-header">
    <h1 class="brand">RENGASKAUPPA</h1>
    <p class="tagline">Laadukkaat renkaat joka säähän – edullisesti ja nopeasti.</p>
    <?php include __DIR__ . '/menu.php'; ?>
  </header>

  <main class="container">
    <section class="card center-block">
      <h2>Yhteystiedot</h2>
      <p>Ota yhteyttä tarjousta varten.</p>

      <p><strong>Sähköposti:</strong> info@rengaskauppa.fi<br>
         <strong>Puhelin:</strong> 010 123 4567</p>

      <div class="actions">
        <a class="btn btn-primary" href="palaute.php">Lähetä viesti lomakkeella</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">© 2025 Rengaskauppa</footer>
</body>
</html>
