<?php

var_dump($_GET);
var_dump($_POST);  

//Si pseudo égale à admin et password égale à admin
if ($_POST["pseudo"] === "admin" && $_POST["password"] === "password"){
    echo "Bonjour " .$_POST["pseudo"];


    

//Sinon si wrong 
}else if($_POST["password"] !== "admin"){
header("Location: login.php?message=Erreur de password");
}else if ($_POST["pseudo"] !== "admin"){
    header("Location: login.php?message=Erreur de pseudo");
}
 

?>