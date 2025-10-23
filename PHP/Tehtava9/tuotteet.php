<?php /* Tuotelista */ ?>
<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tuotteet – Rengaskauppa</title>
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
    <h2 class="page-title">Tuotteet</h2>
    <p class="lead">Renkaat ympärivuotiseen ajoon.</p>

    <div class="grid">
      <article class="card product">
        <h3>Nastarenkaat</h3>
        <p class="price">400 € <span>/ sarja</span></p>
        <p>Paras pito vaikeisiin talvikeleihin.</p>
        <a class="btn" href="yhteystiedot.php">Kysy saatavuutta</a>
      </article>

      <article class="card product">
        <h3>Kitkarenkaat</h3>
        <p class="price">300 € <span>/ sarja</span></p>
        <p>Hiljainen ja mukava talviajovelho.</p>
        <a class="btn" href="yhteystiedot.php">Kysy saatavuutta</a>
      </article>

      <article class="card product">
        <h3>Kesärenkaat</h3>
        <p class="price">300 € <span>/ sarja</span></p>
        <p>Varma pito sateella ja paisteella.</p>
        <a class="btn" href="yhteystiedot.php">Kysy saatavuutta</a>
      </article>
    </div>
  </main>

  <footer class="site-footer">© 2025 Rengaskauppa</footer>
</div>
</body>
</html>
