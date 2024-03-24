<?php
require "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['tweet'])) {
        $tweet = $_POST['tweet'];

        if(empty($tweet)) {
            echo "Veuillez entrer un tweet.";
        } else {
            // Insérer le tweet dans la base de données
            $requete = $database->prepare('INSERT INTO tweet (tweet) VALUES (:tweet)');
            $resultat = $requete->execute(array(
                'tweet' => $tweet
            ));

            if ($resultat) {
                echo "Tweet envoyé avec succès.";
            } else {
                echo "Une erreur s'est produite lors de l'envoi du tweet.";
            }
        }
    }
}

?>