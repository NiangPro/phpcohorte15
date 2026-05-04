<?php 

$matrice = [
    ["f", 57, true],
    ['bleu', 'rouge', 'vert'],
    ['violet', 'gris', 'noir']
];

for($ligne = 0; $ligne < count($matrice); $ligne++){
    for($colonne = 0; $colonne < count($matrice[$ligne]); $colonne++){
        echo $matrice[$ligne][$colonne]."-";
    }
    echo "<br>";
}

foreach($matrice as $tableau){
    foreach($tableau as $el){
        echo "$el * ";
    }
    echo "<br>";
}


$person = [
    "prenom" => "Moussa",
    "nom" =>"Dia",
    "age" => 56
];

echo "<br> Prenom:".$person["prenom"];
echo "<br> Nom:".$person["nom"];
echo "<br> Age:".$person["age"];