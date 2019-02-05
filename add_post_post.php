<?php
session_start();
require "database.php";

// prepare requete



$title = $_POST["title"];
$content = $_POST["content"];


$req = $db->prepare('INSERT INTO posts(title, content) VALUES(:title, :content)');
//Executer req
$req->execute(array(
    "title" => $title,
    "content" => $content
));

//Rediriger vers admin + message
header("Location: add_post_post.php?message=Votre article à bien été ajouter");