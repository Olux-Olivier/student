<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
</head>
<body>
    <div>
        <form action="../../Controller/AdminController/VerifConnection.php" method = "post">
            <input type="email" name="email" placeholder = "Saisir email" >
            <input type="password" name = "mdp" placeholder = "Saisir password">
            <input type="submit" value="valider" name = "envoyer">
        </form>
    </div>
</body>
</html>