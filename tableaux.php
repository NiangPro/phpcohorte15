<?php 
echo "<pre>";
$tab = ["fatou", "diop", "ngom", 89, true];

$entiers = array(-6, 5.6, 89, 34, 189, -456);

echo "Le premier element: ".$tab[0];
echo "<br>Le nombre d'element: ".count($tab)."<br>";

// inserer en derniere position 
$tab[] = "Boubacar";
array_push($tab, "Cheikh");
// inserer en premiere position 
array_unshift($tab, "Seynabou");
// inserer entre deux position 
array_splice($tab, 5, 0, "katy");

// supprimer le premier element 
array_shift($tab);

// supprimer le dernier element 
array_pop($tab);
// supprimer un element d'une position indexee 
array_splice($tab, 5, 1);

// inverser les elements du tableau 
$tab = array_reverse($tab);

for($i=0; $i < count($tab); $i++){
    echo "$i => ". $tab[$i]."-";
}

foreach($tab as $valeur){
    echo "<br> $valeur *";
}

// parcourir le tableau 
foreach($tab as $pos => $el){
    echo "<br>$pos => $el-";
}

var_dump($entiers[1]);
print_r($tab);

sort($entiers);
rsort($entiers);
print_r($entiers);

echo "</pre>";
