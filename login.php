
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login_post.php" method="post">
<input type="text" placeholder="Pseudo" name="pseudo">
<input type="password" placeholder="Password" name="password">
<input type="submit" placeholder="Envoyer">
</form>
<?php if(isset($_GET ["message"])){
    echo $_GET["message"];
} ?>
</body>
</html>