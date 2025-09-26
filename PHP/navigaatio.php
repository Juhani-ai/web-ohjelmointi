<?php
// Määritellään sivut taulukossa
$sivut = [
    'etusivu' => 'Etusivu',
    'tuotteet' => 'Tuotteet',
    'yhteystiedot' => 'Yhteystiedot'
];

// Haetaan nykyisen sivun tiedostonimi
$nykyinen_sivu = basename($_SERVER['PHP_SELF'], '.php');
?>

<nav>
    <ul>
        <?php foreach ($sivut as $tiedosto => $nimi): ?>
            <li class="<?= ($nykyinen_sivu == $tiedosto) ? 'active' : '' ?>">
                <a href="<?= $tiedosto ?>.php"><?= $nimi ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
