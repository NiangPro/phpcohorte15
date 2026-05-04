<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 col-md-6">
        <form action="" method="post">
            <div>
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control">
            </div>
            <div>
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div>
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control">
            </div>
            <button type="submit" name="register" class="btn btn-success mt-3">S'inscrire</button>
        </form>

        <?php 
            if(isset($_POST["register"])){
                echo "Prenom:".$_POST["prenom"];
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>