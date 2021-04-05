<?php

session_start();
if (empty($_SESSION['auth']) && empty($_SESSION['auth']['login']) && empty($_SESSION['auth']['password'])) {
    header("location:login.php");
}else {
    $nom=$_SESSION['auth']['nom'];
    $prenom=$_SESSION['auth']['prenom'];
    echo "BIENVENUE <b>".$prenom." ".$nom ."</b>";
}

?>
<a href="accueil.php"> acceuil</a>
<br><hr><a href="logout.php">se deconnecter</a>