<?php

var_dump($_GET);
var_dump($_POST);  

//Si pseudo égale à admin et password égale à admin
if ($_POST["pseudo"] === "pseudo" && $_POST["password"] === "password"){
    echo "Bonjour " .$_POST["pseudo"];


    

//Sinon si wrong 
}else if($_POST["password"] !== "password"){
header("Location: login.php?message=Erreur de password");
}else if ($_POST["pseudo"] !== "pseudo"){
    header("Location: login.php?message=Erreur de pseudo");
}
 

?>