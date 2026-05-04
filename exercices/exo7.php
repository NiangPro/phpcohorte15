<?php 

$nombre = 7;

$somme = 0;
for($i =1;  $i < $nombre; $i++){
    if ($nombre % $i == 0) {
        $somme = $somme + $i;
    }
}

if ($somme == $nombre) {
    echo "$nombre est un nombre parfait";
}else{
    echo "$nombre n'est pas un nombre parfait";

}

$fact = 1;

$operation = '';
// unset($nombre);
for($i =$nombre; $i >= 1; $i--){
    // if($i != 1){
    //     $operation .= "$i x";
    // }else{
    //     $operation .= "$i";
    // }
    $operation .= $i != 1 ? "$i x " : "$i";
    $fact *= $i;
}

echo "<br>$nombre ! = $operation =  $fact";