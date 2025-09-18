<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kayttaja = $_POST['kayttaja'] ?? '';
    $salasana = $_POST['salasana'] ?? '';

    if ($kayttaja === "admin" && $salasana === "kissa123") {
        echo "<h2>Tervetuloa admin!</h2>";
        echo "Sinut ohjataan palkkalaskuriin 2 sekunnin kuluttua...";
        echo '<meta http-equiv="refresh" content="2;url=palkkalaskuri.php">';
        exit();
    } else {
        echo "<h2>Virheellinen käyttäjätunnus tai salasana.</h2>";
    }
}
?>
