<?php 
$choix = 3;
echo "
        ****** MENU PRINCIPAL ***** <br>
        1- Sports <br>
        2- Couleur <br>
        3- Musique <br>
        Faites votre choix: $choix <br>
";

switch ($choix) {
    case 1:
        echo "**** Menu Sports *****";
        break;
    case 2:
        echo "**** Menu Couleur *****";
        break;
    case 3: 
        $choix = 'b';
        echo "
        **** Menu Musique ***** <br>
            a- Mbalax <br>
            b- Raggae <br>
            Faites votre choix: $choix <br>
        ";
        switch ($choix) {
            case 'a':
                echo "Vous avez choisi musique -> mbalax";
                break;
            case 'b':
                echo "Vous avez choisi musique -> raggae";
                break;
            default:
                echo "Choix indisponible pour le menu musique";
                break;
        }
        break;
    default:
        echo "Choix indisponible";
        break;
}