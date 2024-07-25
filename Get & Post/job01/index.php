<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Job01</title>
</head>

<body>
    <form action="index.php" method="get">
        <div>
            <label for="say">Quelle salutation voulez-vous adresser&nbsp;?</label>
            <input name="say" value="Salut" />
        </div>
        <div>
            <label for="to">À qui voulez‑vous l'adresser ?</label>
            <input name="to" value="Maman" />
        </div>
        <div>
            <button type="submit">Envoyer mes salutations</button>
        </div>
    </form>

    <?php
    // Vérifie s'il y a des arguments $_GET et affiche leur nombre
    echo "<p>Nombre d'arguments GET : ".count($_GET)."</p>";
    ?>
</body>

</html>