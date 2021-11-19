<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Pythagore</title>
</head>
<?php

    if($_POST['x'] != '' && $_POST['y'] != '' ){

        echo($_POST['checkX']);
        echo($_POST['checkY']);
        if( is_numeric($_POST['x']) && is_numeric($_POST['y'])){
            $hypo = sqrt( pow($_POST['x'],2) + pow($_POST['y'],2) );
        }else{
            $error = 'Veuillez entrer un nombre';
        }
    }else{
        $error = 'Veuillez remplir tous les champs avec des nombres';
    }

?>

<body>
        <div class="Container">
        <h1>Pythagore</h1>
        <img src="https://www.educastream.com/IMG/Image/formules-trigonometriques-16b.png" alt="Image de triangle rectangle">

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
            <div>
                <label>Entrer un côté :</label>
                <input type="text" name="x" id="x" placeholder="Entrer un nombre">
            </div>
            <div>
                <label>Entrer un deuxième côté :</label>
                <input type="text" name="y" id="y" placeholder="Entrer un nombre">
            </div>
            <input type="submit" value="Calculer">
        </form>
        <?php
            if(isset($hypo)){
                echo("<div class='Success'>");
                    echo('La longueur du dernier côté est : ' . $hypo);
                echo('</div>');
            }else{
                echo("<div class='Fail'>");
                    echo($error);
                echo('</div>');
            }
        ?>
    </div>
</body>
</html>