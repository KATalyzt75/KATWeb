<?php

$m1 = "Ataque";
$m2 = "Fuerza";
$m3 = "Defensa";
$m4 = "Range";
$m5 = "Prayer";
$m6 = "Magia";
$m7 = "RuneCrafting";
$m8 = "Construction";
$m9 = "Vida";
$m10 = "Agilidad";
$m11 = "Herblore";
$m12 = "Thieving";
$m13 = "Crafting";
$m14 = "Fletching";
$m15 = "Slayer";
$m16 = "Hunter";
$m17 = "Mining";
$m18 = "Smithing";
$m19 = "Fishing";
$m20 = "Cooking";
$m21 = "Firemaking";
$m22 = "WoodCutting";
$m23 = "Farming";

$rm = array($m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$m11,$m12,$m13,$m14,$m15,$m16,$m17,$m18,$m19,$m20,$m21,$m22,$m23);

$random_keys = array_rand($rm, 1);

echo $rm[$random_keys];

/*
Asi se comenta en bloques :P
*/

// Y así de una sola linea

?>