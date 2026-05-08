<?php include_once("navbar.php"); ?>

<div class="container col-md-8">
    <?php 

        function estVide($tab = []){
            foreach($tab as $valeur){
                if(empty($valeur)){
                    return true;
                }
            }

            return false;
        }
        if (isset($_POST["envoyer"])) {
            extract($_POST);
            // if(estVide($_POST)){
            if(empty($prenom) || empty($nom) || empty($sexe) || empty($age) || empty($formation)){
                echo "<div class='alert alert-danger'>Veuillez remplir tous les champs</div>";
            }else{
                echo "
                    Prenom: ".htmlspecialchars($prenom) ." <br>
                    Nom: $nom <br>
                    Email: $email <br>
                    Age: $age ans <br>
                    Sexe: $sexe <br>
                    Formation: $formation <br>
                ";
            }
        }


    ?>
    <h1>Page d'inscription</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Nom</label>
                <input type="text" name="nom"  class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Age</label>
                <input type="number" min="0" name="age" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Sexe</label><br>
                Masculin<input type="radio" name="sexe" value="Masculin" checked>
                Feminin<input type="radio" name="sexe" value="Feminin" >
            </div>
             <div class="col-md-6">
                <label for="">Formation</label>
                <input type="text"  name="formation" class="form-control">
            </div>
        </div>

        <button type="submit" value="envoyer" class="btn btn-success mt-3" name="envoyer">Envoyer</button>
    </form>
</div>

<?php include_once("footer.php"); ?>
