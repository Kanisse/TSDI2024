<?php 

$mdp= "Admin"; $login="Admin";
if(isset($_POST['cnx'])){

    $login1=$_POST['login'];
    $mdp1=$_POST['mdp'];

    if($login1==$login && $mdp1==$mdp){
       header("location: acceuil.php");
    }
    else {
        header("location: 404.php");
    }
}



?>