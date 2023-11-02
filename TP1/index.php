<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="traitement.php" method="post">
    <input placeholder="donner moi votre nom" name="nom" type="text">
    <input type="submit" value="ok" name="Valider">
</form>

<a href="produits.php">visitez notre site</a>
<?php $mdp = md5("admin"); 
echo '<a href="traitement.php?nom=baraka&prenom=sara&mdp='.$mdp.'">afficher un message</a>';
header("location: produits.php");
?>
<a href="http://imbt.ma">cliquez ici</a>

</body>
</html>