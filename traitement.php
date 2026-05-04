<?php 


if(isset($_POST["register"])){
    // print_r($_POST);



    echo "<br> Bonjour ".$_POST["prenom"].", votre compte a été créé avec succès";
}else{
    echo "Veuillez renseigner d'abord le formulaire";
}
