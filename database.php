<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=Twitter','root','');
} catch(PDOException $e) {
    die('Site indisponible');
}

// Récupérer tous les utilisateurs depuis la base de données    
$requete = $database->prepare("SELECT id, nom, email FROM user");
$requete->execute();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);

// Gestion de l'ajout d'un nouvel utilisateur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['pseudo'], $_POST['email'], $_POST['password'])) {
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($pseudo) || empty($email) || empty($password)) {
            echo "Tous les champs sont requis.";
        } else {
            // Hashage du mot de passe
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Préparation de la requête pour insérer un nouvel utilisateur
            $requete = $database->prepare('INSERT INTO user (nom, email, password) VALUES (:nom, :email, :password)');
            $resultat = $requete->execute(array(
                'nom' => $pseudo,
                'email' => $email,
                'password' => $hashed_password
            ));

            if ($resultat) {
                echo "Nouvel utilisateur ajouté avec succès.";
            } else {
                echo "Une erreur s'est produite lors de l'ajout de l'utilisateur.";
            }
        }
    } else {
        echo "Formulaire incomplet";
    }
}

?>
