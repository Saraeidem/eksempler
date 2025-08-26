<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tall1 = (float)($_POST['tall1'] ?? 0);
    $tall2 = (float)($_POST['tall2'] ?? 0);

    $sum = $tall1 + $tall2; // ← semikolon her!
    $differanse = $tall1 - $tall2;

    echo "Tall 1 er $tall1<br>";
    echo "Tall 2 er $tall2<br>";
    echo "Summen er $sum<br>";
    echo "Differansen er $differanse<br><br>";
    echo '<a href="0103.html">Tilbake til skjemaet</a>';
} else {
    header('Location: 0103.html'); exit;
}
