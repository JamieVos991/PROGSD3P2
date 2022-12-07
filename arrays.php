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
  var_dump(print_r($aanhef), print_r ($korting), print_r($ondertekening));
echo '</pre>';
 

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

  $replace = str_replace($korting, ['product' => 'asd']);

  var_dump($replace);

 

/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

 $aanbieding = (array_merge($korting, $replace));

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */

print '<pre>';
print_r($aanbieding);
print '<pre>';
