<?php    /* Eksempel 4 */
/*
/*    Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/*    Programmet skriver ut de 2 tallene og summen og differansen av/mellom tallene
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  /* variable gitt verdier fra feltene i HTML-skjemaet */
 $sum=$tall1 + $tall2;  /* beregning av summen utført  */
  $differanse=$tall1 - $tall2;  /* beregning av differansen utført  */
  $produkt=$tall1 * $tall2;  /* beregning av produktet utført  */
  $kvotient=$tall1 / $tall2;  /* bereg
			
  print ("tall1 + tall2 = $sum <br />");  /* utskrift av summen */
  print ("tall1 - tall2 = $differanse <br />");  /* utskrift av differansen */
  print ("tall1 * tall2 = $produkt <br />");  /* utskrift av produktet */
  print ("tall1 / tall2 = $kvotient <br />");  /* utskrift av kvotienten */
?>