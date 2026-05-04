<?php 
$age = 13;

if($age >= 18){
    echo "Majeur";
}else if($age < 18){
    echo "mineur";
}

$note = 9;

if($age >= 18 || $note >= 10){
    echo "<br> partant"; 
}else{
    echo "<br> Restant";
}