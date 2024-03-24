<?php
require "ajout_tweet.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bdr.css">
    <link rel="stylesheet" href="bt.css">
</head>
<body>
<div class="search-bar">
        <form action="">
            <input type="Search" placeholder="rechercher" class="bdr">
            <input type="Submit" class="bdr">
        </form>
    </div>

    <div class="content">
        <div class="sidebar">
            <div class="sidebar__brand">
                <i class="fa fa-twitter"></i>
            </div>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-home"></i>
                <span class="sidebar__item__text">Acceuil</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-compass"></i>
                <span class="sidebar__item__text">Explore</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-bell"></i>
                <span class="sidebar__item__text">Notifications</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-envelope"></i>
                <span class="sidebar__item__text">Messages</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-bookmark"></i>
                <span class="sidebar__item__text">listes</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-list-alt"></i>
                <span class="sidebar__item__text">Signets</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-list-alt"></i>
                <span class="sidebar__item__text">Communautés</span>
            </a>
            <a href="#" class="sidebar__item">
                <i class="sidebar__item__icon fa fa-list-alt"></i>
                <span class="sidebar__item__text">Prenium</span>
                <a href="#" class="sidebar__item">
                    <i class="sidebar__item__icon fa fa-list-alt"></i>
                    <span class="sidebar__item__text">profil</span>
                </a>
                <a href="#" class="sidebar__item">
                    <i class="sidebar__item__icon fa fa-list-alt"></i>
                    <span class="sidebar__item__text">Plus</span>
                </a>
            </a>
        </div>
    <div>
    <div class="Tweet-bar">
        <form action="ajout_tweet.php" method="POST">
            <input type="Tweet" placeholder="Envoyer un Tweet" class="tweet" name= "tweet">
            <input type="Submit" class="tweet">
        </form>
    </div>
    </div>
</div>
</body>
</html>