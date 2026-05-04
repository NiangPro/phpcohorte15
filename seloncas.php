<?php 

$choix = 1;
echo "
    MENU DU JOUR <br>
    1- Thiebou Djeun <br>
    2- Kaldou <br>
    3- Domada <br>
    4- C'Bon <br>
    Faites votre choix: $choix <br>
";

switch($choix){
    case 1: 
        echo "Vous avez choisi: Thiebou Djeun";
        break;
    default: 
        echo "<mark>Plat indisponible</mark>";
        break;
}