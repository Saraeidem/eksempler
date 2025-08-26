<?php  /* Eksempel 4 */
$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];

$sum        = $tall1 + $tall2;
$differanse = $tall1 - $tall2;
$produkt    = $tall1 * $tall2;

if ($tall2 == 0) {
    $kvotient = "Udefinert (deling på null)";
} else {
    $kvotient = $tall1 / $tall2;
}

print ("Tall 1 er $tall1 <br />");
print ("Tall 2 er $tall2 <br />");
print ("<br />");
print ("Summen er $sum <br />");
print ("Differansen er $differanse <br />");
print ("Produktet er $produkt <br />");
print ("Kvotienten er $kvotient <br />");
