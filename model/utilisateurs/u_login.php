<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=wcsdb', 'root', '');
extract($_POST); 
if(isset($login) && !empty($login) ) { 
   $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail=? AND mdp=?');
   $req->execute(array($mail,$mdp)); 
   $nb = $req->rowCount(); 
   //print $nb;
   if ($nb==1){ 
      $_SESSION["mail"]=$mail;
      $_SESSION["mdp"]=$mdp;  
      $_SESSION["message"]= 'toastr.success("Connexion Reussie")';
      header("Location:index.php?p=profil"); 
       
   }else{ 
     
      $_SESSION["message"]= 'toastr.error("Adresse Mail ou Mot de passe incorrects")';
      header("Location:index.php?p=login");
   }
}   