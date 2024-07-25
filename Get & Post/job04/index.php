<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job03</title>
</head>

<body>
    <form action="index.php" method="POST">
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
        echo "<br><table border='1'>";
        echo "<tr><th> Argument </th><th> Valeur </th></tr>";
        foreach ($_POST as $key => $value) {
            echo "<tr><td>".($key) . "</td><td>".($value) . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>

</html>