<?php 
session_start();
// Création d'un nouvel utilisateur
    $bdd = new PDO('mysql:host=localhost;dbname=wcsdb', 'root', '');
    extract($_POST); 
   // header("Location : login.php"); 
 
if(isset($confirm) && !empty($confirm) ) {
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail=?');
    $req->execute(array($mail)); 
    $nb = $req->rowCount();
    if ($nb>0){
        $_SESSION["message"]= 'toastr.error("Cet adresse mail est déja utilisé")';
        header("Location:index.php?p=register");

    }else{ 
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $req1 = $bdd->prepare('INSERT INTO utilisateurs(nom_prenom, mail,mdp) VALUES(:nom_prenom, :mail,:mdp)');
        $req1->execute(array(
            'nom_prenom' => $nom_prenom,
            'mail' => $mail,
            'mdp' => $mdp,
        ));
        $_SESSION["message"]= 'toastr.success("Votre compte a été créer avec succès")';
        header("Location:index.php?p=login");

        
    } 
   // header("Location : /wcs/index.php?p=login");

}  
