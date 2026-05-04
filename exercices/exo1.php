<?php 

$nom = "Fatou";
$note1 = 14;
$note2 = 10;
$note3 = 16;
$absence = 2;

$somme = $note1+$note2+$note3;
$moyenne = $somme/3;
$moyenne = number_format($moyenne, 2, ",", " ");

echo "Moyenne de $nom: $moyenne/20";
