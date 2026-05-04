<?php 

$tabch = ["lundi", "mArdi", "mer", "fer", "jeudi"];

$voyelles = ['i', 'a', 'e', 'u', 'o', 'y'];


foreach($tabch as $chaine){
    $cpt = 0;
    for ($i=0; $i < strlen($chaine) ; $i++) { 
        if(in_array(strtolower($chaine[$i]), $voyelles)){
            $cpt++;
        }
    }

    if ($cpt >= 2) {
        echo "$chaine - ";
    }
}