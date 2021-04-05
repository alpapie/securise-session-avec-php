<?php
session_start();
if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
  extract($_POST);
  $connect=mysqli_connect('127.0.0.1','root','','tp2php2020');
   $req="SELECT nom,prenom FROM users WHERE logine='$login' and pwd='$password'";
   $resultat=mysqli_query($connect,$req) or die(mysqli_error());
        if (mysqli_num_rows($resultat)>0) {
            $ligne=mysqli_fetch_assoc($resultat);
          $_SESSION['auth']=[
              'login'=>$login,
               'password'=>$password,
               'nom'=>$ligne['nom'],
               'prenom'=>$ligne['prenom']
          ];
          header("location:admin.php");
           
        }else {
    echo "mauvais identifiant";
}
}


?>

<form action="" method="post">
login:<input type="text" name="login" ><br>
mot de passe <input type="password" name="password"><br>
<input type="submit" value="envoyer"><br>

</form>