<body>
  <div class="page">
    <header class="site-header">
      <link rel="stylesheet" href="tyyli.css" />
      <h1 class="brand">RENGASKAUPPA</h1>
      <p class="sub">Laadukkaat renkaat joka säähän – edullisesti ja nopeasti.</p>
      <?php include "menu.php"; ?>
    </header>

    <main class="container">
      <section class="card center-block">
        <h2>Kerro asiasi – vastaamme pian.</h2>
        <form method="post" action="palaute_vastaus.php" class="form">
          <label for="nimi">Nimi</label>
          <input type="text" id="nimi" name="nimi">

          <label for="aihe">Aihe</label>
          <select id="aihe" name="aihe">
            <option value="kysymys">Kysymys</option>
            <option value="palaute">Palaute</option>
            <option value="valitus">Valitus</option>
          </select>

          <label for="viesti">Viesti</label>
          <textarea id="viesti" name="viesti"></textarea>

          <button class="btn btn-primary" type="submit" name="laheta">Lähetä</button>
        </form>
      </section>
    </main>

    <footer class="site-footer">© 2025 Rengaskauppa</footer>
  </div>
</body>
</html>
