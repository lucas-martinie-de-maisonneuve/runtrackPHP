<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job05</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div>
            <label for="username">Nom d'utilisateur : </label>
            <input name="username" value="" />
        </div>
        <div>
            <label for="password">Mot de passe : </label>
            <input name="password" value="" />
        </div>
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
    <?php
    
    if ($_POST['username'] === "John")
        echo "Ce n'est pas ma guerre ";
    else
        echo "Votre pire cauchemar"
    ?>
</body>

</html>