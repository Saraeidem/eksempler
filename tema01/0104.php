<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<pre style='background:#f7f7f7;padding:10px;border:1px solid #ddd'>";
echo "REQUEST_METHOD: " . ($_SERVER['REQUEST_METHOD'] ?? 'ukjent') . "\n";
echo "SCRIPT_NAME: " . ($_SERVER['SCRIPT_NAME'] ?? 'ukjent') . "\n";
echo "_POST:\n";
var_dump($_POST);
echo "</pre><hr>";

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    echo 'Forventet POST fra 0104.html. ';
    echo '<a href="0104.html">Gå til skjema</a>';
    exit;
}

if (!isset($_POST['tall1'], $_POST['tall2'])) {
    echo "Mangler felt (tall1/tall2) i POST. Sjekk name-attributtene i HTML.";
    echo '<br><a href="0104.html">Tilbake</a>';
    exit;
}

$t1 = (float)$_POST['tall1'];
$t2 = (float)$_POST['tall2'];

$sum        = $t1 + $t2;
$differanse = $t1 - $t2;
$produkt    = $t1 * $t2;
$kvotient   = ($t2 == 0.0) ? 'Udefinert (deling på null)' : ($t1 / $t2);

echo "Tall 1 er " . htmlspecialchars($_POST['tall1']) . "<br>";
echo "Tall 2 er " . htmlspecialchars($_POST['tall2']) . "<br><br>";
echo "Summen er $sum<br>";
echo "Differansen er $differanse<br>";
echo "Produktet er $produkt<br>";
echo "Kvotienten er $kvotient<br><br>";
echo '<a href="0104.html">Tilbake til skjemaet</a>';
