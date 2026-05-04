<?php 

    function direBonjour(){
        echo "Bonjour tout le monde <br>";
    }

    function direBonjourA($prenom){
        echo "Bonjour $prenom <br>";
    }

    function bonjour($prenom, $sexe){
        $titre = $sexe == "M" ? "Mr" : "Mme";

        echo "Bonjour $titre $prenom <br>";
    }

    function somme($a , $b){
        echo "<br> $a + $b = ".($a+$b);
    }

    function estCarre($nombre){
        if ($nombre == intval(sqrt($nombre)) * intval(sqrt($nombre))) {
            echo "<br>$nombre est un nombre carre";
        }else{
            echo "<br>$nombre n'est pas un nombre carre";
        }
    }

    direBonjour();

    $p = "Fatou";
    direBonjourA("Binetou");
    bonjour("Codou", "M");

    somme(35, 15);

    echo sqrt(16);

    estCarre(5);