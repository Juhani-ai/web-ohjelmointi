<?php /* palaute.php */ ?>
<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8" />
  <title>Palaute · Rengaskauppa</title>
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
      <h2>Kerro asiasi – vastaamme pian.</h2>

      <form method="post" class="form">
        <label>Nimi
          <input type="text" name="nimi" required>
        </label>

        <label>Aihe
          <select name="aihe">
            <option value="kysymys">Kysymys</option>
            <option value="palaute">Palaute</option>
            <option value="valitus">Valitus</option>
          </select>
        </label>

        <label>Viesti
          <textarea name="viesti" rows="4" required></textarea>
        </label>

        <div class="actions">
          <button type="submit" name="laheta" class="btn btn-primary">Lähetä</button>
        </div>
      </form>

      <?php
      if (isset($_POST['laheta'])) {
        $nimi   = htmlspecialchars($_POST['nimi'] ?? '');
        $aihe   = $_POST['aihe'] ?? '';
        $viesti = htmlspecialchars($_POST['viesti'] ?? '');

        echo '<div class="card success center" style="margin-top:1rem">';
        echo "<h3>Kiitos viestistäsi, $nimi!</h3>";
        switch ($aihe) {
          case 'kysymys': echo '<p>Vastaamme kysymykseesi mahdollisimman pian.</p>'; break;
          case 'palaute': echo '<p>Kiitos palautteesta! Se auttaa meitä kehittymään.</p>'; break;
          case 'valitus': echo '<p>Olemme pahoillamme kokemastasi – asia käsitellään heti.</p>'; break;
          default:        echo '<p>Viestisi on vastaanotettu.</p>';
        }
        echo "<p><strong>Viestisi:</strong> $viesti</p>";
        echo '</div>';
      }
      ?>
    </section>
  </main>

  <footer class="site-footer">© 2025 Rengaskauppa</footer>
</body>
</html>
