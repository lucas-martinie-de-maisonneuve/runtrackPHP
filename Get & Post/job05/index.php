<!-- Créez un formulaire de connexion de type POST ayant deux champs username et password.
Après validation du formulaire :
Si le username est “John” et le password est “Rambo” afficher “ce n'est pas ma guerre”. Sinon afficher “votre pire cauchemar”  -->

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
    
    if ($_POST['username'] === "John" && $_POST['password'] == "Rambo")
        echo "Ce n'est pas ma guerre ";
    else
        echo "Votre pire cauchemar"
    ?>
</body>

</html>