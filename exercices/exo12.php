<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Veuillez saisir votre numero de telephone</label><br>
        <input type="text" name="tel"><br>
        <button type="submit" name="valider">Valider</button>
    </form>

    <?php 

        if (isset($_POST["valider"])) {
            extract($_POST);
            $op = ["70", '71', '75', '76', '77', '78', '33', '88'];
            if (!empty($tel)) {
                if (ctype_digit($tel)) {
                    if(strlen($tel) == 9){
                        $deuxchiffres=substr($tel, 0, 2); 
                        
                        if (in_array($deuxchiffres, $op)) {
                            echo "<p style='color: green'> Le numero de telephone $tel est valide </p>";

                        }else{
                            echo "<p style='color: red'> Le numero de telephone doit commencer par 70, 71 ... 78 </p>";

                        }
                    }else{
                        echo "<p style='color: red'> Le numero de telephone doit comporter 9 chiffres </p>";
                    }
                }else{
                    echo "<p style='color: red'> Le numero de telephone doit comporter uniquement des chiffres </p>";
                }
            }else{
                echo "<p style='color: red'> Veuillez saisir votre numero de telephone </p>";
            }
        }
    ?>
</body>
</html>