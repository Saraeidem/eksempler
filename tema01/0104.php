<?php   /* Eksempel 4 */
/*
    Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
    Programmet skriver ut de 2 tallene og summen, differansen, produktet og kvotienten
*/

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];   /* variablene får verdier fra feltene i HTML-skjemaet */

$sum = $tall1 + $tall2;           /* beregning av summen utført */
$differanse = $tall1 - $tall2;    /* beregning av differansen utført */
$produkt = $tall1 * $tall2;       /* beregning av produktet utført */

/* kvotient – håndter deling på null */
if ($tall2 == 0) {
    $kvotient = "Udefinert (deling på null)";
} else {
    $kvotient = $tall1 / $tall2;
}

/* utskrift av resultater */
print ("Tall 1 er $tall1 <br />");
print ("Tall 2 er $tall2 <br />");
print ("<br />");
print ("Summen er $sum <br />");
print ("Differansen er $differanse <br />");
print ("Produktet er $produkt <br />");
print ("Kvotienten er $kvotient <br />");
?>
