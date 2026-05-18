<?php 

require_once("database.php");

$classes = recupererToutesLesClasses();
// try{

//     echo 5/0;
// }catch(DivisionByZeroError $e){
//     echo "Impossible de diviser par 0 a la ligne ".__LINE__;
//     echo "<br>".__FILE__;
//     // echo $e->getMessage();
// }


require_once("navbar.php");

?>

<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <div class="row">
                <h2 class="col-md-10">Liste des classes</h2>
                <div class="col-md-2 text-end">
                    <a href="ajoutclasse.php" class="btn btn-success">Ajouter</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($classes as $c): ?>
                    <tr>
                        <td><?= $c["nom"] ?> </td>
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>
