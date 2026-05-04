<?php 

function estPremier($nombre){
    $cpt = 0;
    for($i = 1; $i <= $nombre; $i++){
        if($nombre % $i == 0){
            $cpt++;
        }
    }

    return $cpt == 2 || $nombre == 1 ? true : false;
}

function lesNombresPremiers($nombre){
    echo "Les nombres premiers entre 1 et $nombre sont : <br>";
    for ($i=1; $i <= $nombre ; $i++) { 
        if(estPremier($i)){
            echo "$i -";
        }
    }
}

function premiers($nombre){
    echo "Les nombres premiers entre 1 et $nombre sont : <br>";
    for($i = 1; $i <= $nombre; $i++){
        $cpt = 0;
        for($j = 1; $j <=$i; $j++){
            if($i % $j == 0){
                $cpt++;
            }
        }
        if($cpt == 2 || $i == 1){
            echo "$i -";
        }
    }
}

premiers(10);