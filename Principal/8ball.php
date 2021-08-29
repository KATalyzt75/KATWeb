<?php

$m1 = "En mi opinión, sí";
$m2 = "Es cierto";
$m3 = "Es decididamente así";
$m4 = "Probablemente";
$m5 = "Buen pronóstico";
$m6 = "Todo apunta a que sí";
$m7 = "Sin duda";
$m8 = "Sí";
$m9 = "Sí - definitivamente";
$m10 = "Debes confiar en ello";
$m11 = "Respuesta vaga, vuelve a intentarlo";
$m12 = "Pregunta en otro momento";
$m13 = "Será mejor que no te lo diga ahora";
$m14 = "No puedo predecirlo ahora";
$m15 = "Concéntrate y vuelve a preguntar";
$m16 = "Puede ser";
$m17 = "No cuentes con ello";
$m18 = "Mi respuesta es no";
$m19 = "Mis fuentes me dicen que no";
$m20 = "Las perspectivas no son buenas";
$m21 = "Muy dudoso";

$rm = array($m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$m11,$m12,$m13,$m14,$m15,$m16,$m17,$m18,$m19,$m20,$m21);

$random_keys = array_rand($rm, 1);

echo $rm[$random_keys];

/*
Asi se comenta en bloques :P
*/

// Y así de una sola linea

?>