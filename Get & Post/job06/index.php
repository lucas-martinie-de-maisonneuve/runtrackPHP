<!-- Créez un formulaire de type GET (se demander, pourquoi pas POST ?) avec un champ nommé nombre.
Après validation du formulaire :
Si la valeur entrée est un nombre pair, afficher “Nombre pair”. Si c’est un nombre impair, afficher “Nombre impair” -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Job06</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="nombre">Entrer un nombre : </label>
            <input name="nombre" value="" />
        </div>
        <div>
            <button type="submit"> Click </button>
        </div>
    </form>
    <?php
    if (isset($_GET['nombre'])) {
        if (is_numeric($_GET['nombre'])) {
            if ($_GET['nombre'] % 2 == 0)
                echo "Le nombre est pair";
            else
                echo "Le nombre est impair";
        } else
            echo "Veuillez entrer un nombre";
    }
    ?>
</body>

</html>