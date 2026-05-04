<?php 

$ch = "Une chaine de caracteres";

$chaine = strtolower($ch);

$nbvoy = 0;

for($i = 0; $i < strlen($chaine); $i++){
    if($chaine[$i] == "i" || $chaine[$i] == "o" || $chaine[$i] == "a" || $chaine[$i] == "u" || $chaine[$i] == "e" || $chaine[$i] == "y"){
        $nbvoy++;
    }
}

echo "Le nombre de voyelles de <q>$ch</q> est de $nbvoy voyelles";