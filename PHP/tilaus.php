<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <title>Tilauslomake</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: white;
      padding: 30px;
      border-radius: 6px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 350px;
    }

    h1 {
      font-size: 20px;
      margin-bottom: 20px;
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }

    input[type="number"], select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      background: #007bff;
      color: #fff;
      padding: 10px;
      border: 0;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }

    .summary {
      margin-top: 20px;
      padding-top: 10px;
      border-top: 1px solid #ddd;
    }

    .summary strong {
      display: block;
      margin-top: 10px;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Tilaa tuote</h1>
    <p><strong>Tuote:</strong> Sähköpotkulauta (349,90 €/kpl)</p>
    <form method="post">
      <label for="maara">Määrä</label>
      <input type="number" id="maara" name="maara" min="1" value="1">

      <label for="toimitus">Toimitustapa</label>
      <select id="toimitus" name="toimitus">
        <option value="0">Nouto (0,00 €)</option>
        <option value="6.90">Postipaketti (6,90 €)</option>
        <option value="12.50">Kotiinkuljetus (12,50 €)</option>
      </select>

      <button type="submit">Laske hinta</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $hinta = 349.90;
      $maara = intval($_POST["maara"]);
      $toimituskulu = floatval($_POST["toimitus"]);

      $valisumma = $hinta * $maara;
      $yhteensa = $valisumma + $toimituskulu;

      echo "<div class='summary'>";
      echo "<h3>Tilauksen yhteenveto</h3>";
      echo "Määrä: {$maara} kpl<br>";
      echo "Välisumma: " . number_format($valisumma, 2, ',', ' ') . " €<br>";
      echo "Toimituskulut: " . number_format($toimituskulu, 2, ',', ' ') . " €<br>";
      echo "<strong>Yhteensä: " . number_format($yhteensa, 2, ',', ' ') . " €</strong>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
