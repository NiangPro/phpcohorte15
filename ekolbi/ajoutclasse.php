<?php
require_once("database.php");

if (isset($_POST["ajouter"])) {
    extract($_POST);

    if (ajouterUneClasse($nom)) {
       return header("Location: classe.php");
    }
}

require_once("navbar.php");

?> 

    <div class="container col-md-8 mt-3">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <div class="row">
                    <h2 class="col-md-10">Formulaire d'ajout classe</h2>
                    <div class="col-md-2 text-end">
                        <a href="classe.php" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div>
                        <label for="">Nom</label>
                        <input type="text" name="nom" required class="form-control">
                    </div>
                    <button name="ajouter" type="submit" class="btn btn-success mt-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
<?php require_once("footer.php"); ?> 