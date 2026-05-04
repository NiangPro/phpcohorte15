<?php 

$chaine = "   ma chaine de caracteres  ";

$chaine = trim($chaine);
echo "Le nombre de caracteres: ".mb_strlen($chaine);

echo "<br> Le premier caractere est : ".$chaine[0];
echo "<br> Le dernier caractere est : ".$chaine[strlen($chaine) - 1];
echo "<br> Majuscule: ".mb_strtoupper($chaine);
echo "<br> Minuscule: ".strtolower($chaine);
echo "<br> Premier lettre en majuscule: ".ucfirst($chaine);
echo "<br> Premier lettre en majuscule pour chaque mot: ".ucwords($chaine);
echo "<br> Le nombre de mots: ".str_word_count($chaine);
echo "<br> Extraire: ".substr($chaine,3, 6);
echo "<br> ".str_replace("m", "L", $chaine);

$tel = "776568686";

if (ctype_digit($tel)) {
    echo "<br> Exact";
    if(str_starts_with($tel, "77")){
        echo "<br> Orange";
    }else{
        echo "<br> Un autre operateur";
    }
}else{
    echo "<br> Le numero de telephone doit avoir uniquement des chiffres";
}
echo "<br> CHaine inversee: ".strrev($chaine);

