<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "Klant");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[products]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Jamie Vos",
  "functie" => "Directeur Webshop beheer"
);

/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */
 
echo '<pre>';
  print_r ($aanhef);
  echo '</pre>';
echo "<br>";

echo '<pre>';
  print_r(str_replace("[[products]]", "Chocoladereep", $korting));
  echo '</pre>';
echo "<br>";

echo '<pre>';
  print_r ($ondertekening);
  echo '</pre>';
echo "<br>";

/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */

/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */
 

/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */
  
 $aanbieding = (array_merge([$aanhef] , [$korting], [$ondertekening]));


/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */


foreach ($aanbieding as $aanbieding) {
  echo "<br>";
  echo '<pre>';
  print_r (str_replace("[[products]]", "Chocoladereep", $aanbieding));
  echo '</pre>';
}