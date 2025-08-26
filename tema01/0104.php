<?php
// Skru på feilmeldinger (nyttig under utvikling)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tall1 = (float)($_POST['tall1'] ?? 0);
    $tall2 = (float)($_POST['tall2'] ?? 0);

    $sum = $tall1 + $tall2;
    $differanse = $tall1 - $tall2;
    $produkt = $tall1 * $tall2;

    // Pass på deling på null
    if ($tall2 != 0) {
        $kvotient = $tall1 / $tall2;
    } else {
        $kvotient = "Udefinert (deling på null)";
    }

    echo "Tall 1 er $tall1<br>";
    echo "Tall 2 er $tall2<br>";
    echo "Summen er $sum<br>";
    echo "Differansen er $differanse<br>";
    echo "Produktet er $produkt<br>";
    echo "Kvotienten er $kvotient<br><br>";

    echo '<a href="0104.html">Tilbake til skjemaet</a>';
} else {
    header('Location: 0104.html');
    exit;
}
?>
