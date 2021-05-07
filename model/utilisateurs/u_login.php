<?php  
$bdd = new PDO('mysql:host=localhost;dbname=wcsdb', 'root', '');
extract($_POST);
//$_SESSION["message"]= 'toastr.success("message ")';   
    
if(isset($login) && !empty($login) ) {
   $req = $bdd->prepare('SELECT mail FROM utilisateurs WHERE mail=? AND mdp=?');
   $req->execute(array($mail,$mdp)); 
   $nb = $req->rowCount();
   if ($nb=1){
      $_SESSION["mail"]=$mail;
      $_SESSION["mdp"]=$mdp; 
      $_SESSION["message"]= 'toastr.success("Bienvenue'+ $mail+ '")';
      header("Location : index.php?p=profil");  
       
   }else{
      $_SESSION["message"]= 'toastr.error("Adresse Mail ou Mot de passe incorrects")';
   }
}     
//print $_SESSION["mail"];