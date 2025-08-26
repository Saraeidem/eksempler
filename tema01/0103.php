<?php
// Sjekk om skjemaet er sendt inn
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hent verdiene fra skjemaet
    $tall1 = $_POST["tall1"];
    $tall2 = $_POST["tall2"];

    // Beregninger
    $sum = $tall1 + $tall2;
    $diff = $tall1 - $tall2;

    // Utskrift
    echo "Tall 1 er $tall1 <br>";
    echo "Tall 2 er $tall2 <br>";
    echo "Summen er $sum <br>";
    echo "Differansen er $diff <br><br>";

    // Lenke tilbake til skjemaet
    echo '<a href="0103.html">Tilbake til skjemaet</a>';
} else {
    echo "Ingen data mottatt.";
}
?>
