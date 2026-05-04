<?php 

$nombre = 4;
if($nombre > 0){
    for($i =1; $i <= 10; $i++){
        // $r = $nombre * $i;
        // echo "$nombre x $i = $r <br>";
        echo "$nombre x $i =".($nombre * $i)."<br>";
    }
}else{
    echo "$nombre doit etre positif";
}