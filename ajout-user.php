

<?php
require 'database.php';



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) {
    $user = $_POST['pseudo'];
    $password = $_POST['password'];
    // Ajout de l'utilisateur à la base de données
    // Assurez-vous d'ajouter les données dans la base de données
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incription</title>
</head>
<body>
    <?php require 'database.php';

    foreach($users as $user) : ?>

    <form action="delete.php" method = "POST">
        <input type="hidden" name="form" value="supprimer">
        <input type="hidden" name="suppr" value="<?php echo $user['id']; ?>">

        <?php echo '<li>' . $user['nom'] .''. $user['email'] . '</li>'; ?>

        <button type="submit">Supprimer</button>
    </form>
        
    <?php endforeach;   ?>

    <form action="">
        <label for=""></label>
    </form>
</body>
</html>