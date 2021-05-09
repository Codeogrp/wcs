<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=wcsdb', 'root', '');
extract($_POST);  
if(isset($login) ) { 

   $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail=? AND mdp=?');
   $mdp = hash("sha512", $mdp); 
   $req->execute(array($mail,$mdp)); 
   $nb = $req->rowCount(); 
   $row = $req->fetch();
   if ($nb==1){ 
      $_SESSION["mail"]=$mail;
      $_SESSION["mdp"]=$mdp;  
      $_SESSION["islogin"]=1;
      $_SESSION["isadmin"]=$row["admin"];
      $_SESSION["message"]= 'toastr.success("Bienvenue !")';
      header("Location:../../index.php?p=profil"); 
       
   }else{  
      $_SESSION["message"]= 'toastr.error("Adresse Mail ou Mot de passe incorrects")';
      header("Location:../../index.php?p=login");
   }
} else { 
   $_SESSION["message"]= 'toastr.error("Rien")';
   header("Location:../../index.php?p=login");

}