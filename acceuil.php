<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form  method="post">
    <input type="number" name="nbrl">
    <input type="number" name="nbrcol">
    <input type="submit" name="OK" value="Afficher le tableau">
</form>

<?php

if(isset($_POST['OK'])){
    $nbrl= $_POST['nbrl'];
    $nbrcol=$_POST['nbrcol'];
    echo "<table border='1'>";
    for ($i=1;$i<=$nbrl;$i++){
        echo "<tr>";
        for($j=1; $j<=$nbrcol;$j++){
            echo "<td>". rand(1,100)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>

</body>
</html>