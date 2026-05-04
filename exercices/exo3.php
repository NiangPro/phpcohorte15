<?php 

// declaration 
$a = 5;
$b = 8;

//affichage avant echange
echo "Avant echange: a =$a et b=$b <br>";

//traitement
$c =$a;
$a = $b;
$b = $c;

//affichage apres echange
echo "Apres echange: a =$a et b=$b <br>";
