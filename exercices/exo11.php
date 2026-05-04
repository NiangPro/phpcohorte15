<?php 

$etudiants = [
    ["nom" => "Fall", "prenom" => "Fatou", "notes" => [9, 12, 16]],
    ["nom" => "Diop", "prenom" => "Moussa", "notes" => [19, 13, 6]],
    ["nom" => "Gueye", "prenom" => "ABDOU", "notes" => [15, 18, 14]]
];


foreach($etudiants as &$et){
    $et["nom"] = strtoupper($et["nom"]);
    $et["moyenne"] = round(array_sum($et["notes"]) / count($et["notes"]), 2);
    
}

usort($etudiants, function($x, $y){
    return $y["moyenne"] <=> $x["moyenne"];
});
    
    // unset($et["nom"]);

foreach($etudiants as $p=>&$et){
    echo "Rang: ".($p+1)."<br>";
    echo "Prenom: ".$et["prenom"]."<br>";
    echo "Nom: ".$et["nom"]."<br>";
    echo "Moyenne: ".$et["moyenne"]."<br>";
    echo "----------------------------------------- <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Notes des etudiants</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Rang</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Moyenne</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($etudiants as $p => &$et){ ?>
                    <tr>
                        <td><?php echo $p+1 ; ?></td>
                        <td><?php echo $et["prenom"]; ?></td>
                        <td><?=  $et["nom"] ?></td>
                        <td>12/20</td>
                    </tr>
              <?php  } ?>

               <?php 
            //    foreach($etudiants as $p => &$et){ 
            //         echo "<tr>
            //             <td> ". ($p+1)."</td>
            //             <td>". $et["prenom"]."</td>
            //             <td>".$et["nom"]."</td>
            //             <td>". $et["moyenne"]." /20</td>
            //         </tr>";
            //   } 
              ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>