<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="largeur">Entrer la largeur : </label>
            <input name="largeur" value="" />
        </div>
        <div>
            <label for="hauteur">Entrer la hauteur : </label>
            <input name="hauteur" value="" />
        </div>
        <div>
            <button type="submit">Click</button>
        </div>
    </form>

    <?php
    if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
        $largeur = $_GET['largeur'];
        $hauteur = $_GET['hauteur'];

        if (is_numeric($largeur) && is_numeric($hauteur) && $largeur > 0 && $hauteur > 0) {
            $largeur = intval($largeur);
            $hauteur = intval($hauteur);

            echo '<pre>';

            // Toit

            for ($i = 0; $i < intval($largeur / 2); $i++) {
                echo str_repeat(" ", intval($largeur / 2) - $i -1);
                echo "/";
                echo str_repeat("_", $i * 2);
                echo "\<br>";
            }

            // Mur
            for ($i = 0; $i < $hauteur; $i++) {
                echo "|";
                echo str_repeat(" ", $largeur - 2);
                echo "|<br>";
            }

            // Sol
            echo "|";
            echo str_repeat("_", $largeur - 2);
            echo "|";

            echo '</pre>';
        } else {
            echo "Veuillez entrer des valeurs numériques valides pour la largeur et la hauteur.";
        }
    }
    ?>
</body>

</html>
