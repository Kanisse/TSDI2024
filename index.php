<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> bienvenue</h1>


<form method="post">
    <input type ="number" name="number1">
    <input type ="number" name="number2">
    <input type="submit" name="OK" >
</form>

<?php
if(isset($_POST['OK'])){
    echo "la somme égale à ". $_POST['number1'] + $_POST['number2'];
}
?>

</body>
</html>