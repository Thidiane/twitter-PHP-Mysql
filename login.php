<?php
require "database.php";
require "traitement.php";
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
<form action="" method="post"> 
        <h4>Twittos</h4>
        <label for="email">MAIL</label>
        <input type="email" required name="email"> 
        <label for="password">MDP</label>
        <input type="password" required name="password"> 
        
        <input type="submit" value="Envoyer">
        <input type="reset" value="Réinitialiser">
</form>
</body>
</html>
