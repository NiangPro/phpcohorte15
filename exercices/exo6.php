<?php 

// recuperer la valeur 
$n = 23;

//declarer la valeur pour compter le nombre de diviseurs
$compteur = 0;

//pourcourir le nombre
for ($i=1; $i <= $n ; $i++) { 
    // tester les diviseurs 
    if ($n % $i == 0) {
        // on compte 
        $compteur++;
    }
}

// tester le nombre de diviseurs 
if ($compteur == 2) {
    echo "$n est un nombre premier car il a $compteur diviseur(s)";
}else{
    echo "$n n'est pas un nombre premier car il a $compteur diviseur(s)";
}