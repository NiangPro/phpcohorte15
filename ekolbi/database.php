<?php 

try{

    $db = new PDO("mysql:host=localhost;dbname=ekolbi", "root", "");
}catch(PDOException $e){
    echo "<br>Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
}

function ajouterUneClasse($nom){
    global $db;
    try {
        // $q = $db->prepare("INSERT INTO classe VALUES(NULL, :nom)");
        // return  $q->execute([
        //     "nom" => $nom,
        // ]);

        // deuxieme methode 
        $q = $db->prepare("INSERT INTO classe VALUES(NULL, ?)");
        return  $q->execute([
             $nom
        ]);
    } catch(PDOException $e){
        echo "<br>Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function recupererToutesLesClasses(){
    global $db;

    try{
        $q = $db->prepare("SELECT * FROM classe ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll();
    }catch(PDOException $e){
        echo "<br>Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}