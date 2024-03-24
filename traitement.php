<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données soumises
    $genre = $_POST["genre"];
    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    header("Location: Twitter.php");
    exit; 
}
?>
