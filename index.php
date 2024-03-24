<?php
require "database.php";
require "traitement.php";
require "ajout-user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="inscription.css">
</head>
<body>
<form action="index.php" method="POST">
        <h4>Twittos</h4>
        <hr>
        <div class="name">
            <div>
                <label for="f">Femme</label>
                <input type="radio" name="genre" id="f" value="femme">
                <label for="h">Homme</label>
                <input type="radio" name="genre" id="h" value="homme">
            </div>

            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
            </div>
            <div>
                <label for="pseudos">User (facultatif)</label>
                <input type="text" id="pseudos" name="pseudos">
            </div>

        </div>
        <label for="email">E-mail</label>
        <input type="email" required name="email">
        <label for="password">Mot de passe</label>
        <input type="password" required name="password">
        <button type="submit">Envoyer</button>
        <input type="reset" value="Réinitialiser">
</form>
</body>
</html>
