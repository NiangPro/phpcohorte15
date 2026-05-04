<?php 

$prenom = "Fatou";
$age = 13;
$note = 15.6;

echo "Bonjour $prenom, tu as $age ans et tu as obtenu la note de $note/20 <br>";

if($note <= 20 && $note >= 16){
    echo "Mention: Excellent";
}else if($note < 16 && $note >= 14){
    echo "Mention: Bien";
}else if($note <14 && $note >= 10){
    echo "Mention: Passable";
}else if($note < 10 && $note >= 0){
    echo "Mention: Insuffisant";
}else{
    echo "La note doit etre comprise entre 0 et 20";
}

if($age < 18){
    echo "<br> Acces refuse";
}else{
    echo "<br> Acces autorise";
}