
<?php 

extract($_SESSION);
$_SESSION["message"]="";
//require_once('model/utilisateurs/u_create.php');
if(isset($_SESSION["islogin"]) && $_SESSION["islogin"]==1){
    $_SESSION["message"]='toastr.error("Vous êtes déja connecté !")';
    header("Location:index.php?p=accueil");
  }
//session_destroy();
//header('Location:login.php')
?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut rooticon" href="public/images/favicon.png">
<!-- Site Title  -->
<title>Wincash Services | Connexion</title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="public/assets/css/vendor.bundle.css?ver=192">
<link rel="stylesheet" href="public/assets/css/style.css?ver=192" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="public/assets/css/theme.css?ver=192">


</head>
   


    <body class="nk-body body-wider bg-light-alt">

	<div class="nk-wrap">
    
        <main class="nk-pages nk-pages-centered bg-theme">
            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="./" class="ath-logo"><img src="public/images/wcstw.png" alt="logo"></a>
                </div>
                <div class="ath-body">
                    <h5 class="ath-heading title">Inscrivez vous </h5>
                    <form action="model/utilisateurs/u_create.php" method="POST">
                    <!-- Pour les notifs   -->
                    <div id="message">
                        <?php
                           // $message = 'toastr.error("Have Fun")';
                        ?>
                    </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" required class="input-bordered" name="nom_prenom" placeholder="Nom et Prénoms">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="email" required class="input-bordered" name="mail" placeholder="Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" required class="input-bordered" id="mdp" name="mdp" onkeyup='check();' placeholder="Mot de passe">
                            </div>
                        </div>
                        
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" id="mdp2" onkeyup='check();' placeholder="Confirmez le mot de passe">
                            </div>
                        </div>
                        
                        <div class="field-item" id="checkBoxList">
                            <input class="input-checkbox" name="checkme" id="agree-term-2" type="checkbox">
                            <label for="agree-term-2">J'ai lu et j'accepte les <a href="#">Termes et Conditions</a>.</label>
                        </div>
                        <button style="background-color: #16a3fe; border-color: #16a3fe; "  value=1 id="confirm" class="btn"  name="confirm"  disabled="disabled">S'inscrire</button>
                        <!--<button  id="confirm" class="btn btn-primary btn-block btn-md" disabled="disabled">S'inscrire</button>
                  -->  </form>
                   
                    <script>
                        var a,b;
                         var check = document.getElementsByName('checkme');
                        //var checkBoxList = document.getElementById('checkBoxList');
                        var inscrire = document.getElementById('confirm');

                        function allTrue(nodeList) {
                        for (var i = 0; i < nodeList.length; i++) {
                            if (nodeList[i].checked === false) return false;
                        }
                        return true;
                        }
                        checkBoxList.addEventListener('click', function(event) {
                        //inscrire.disabled = true;
                        a = false;
                        disable();
                        if (allTrue(check)) {a = true /*inscrire.disabled = false*/;
                            disable();
                        }
                            
                        });   

                        var check = function() {
                            if (document.getElementById('mdp').value ==
                                document.getElementById('mdp2').value) {
                                   b=true;
                                   disable();
                               /* document.getElementById('message').style.color = 'green';
                                document.getElementById('message').innerHTML = 'matching';*/
                            } else {
                               /*document.getElementById('message').style.color = 'red';
                                document.getElementById('message').innerHTML = 'not matching';*/
                                b= false;
                                disable();
                            }
                        }    

                        var disable = function(){
                            if (a==true && b == true){
                                inscrire.disabled= false; 
                            }
                            else{
                                inscrire.disabled= true; 
                            }
                        }
                    </script>
                    
                </div>
                <div class="ath-note text-center tc-light">
                    Avez vous déjà un compte ? <a href="index.php?p=login"> <strong>Connectez vous</strong></a>
                </div>
            </div>
        </main>
    
	</div>
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="public/assets/js/jquery.bundle.js?ver=192"></script>
	<script src="public/assets/js/scripts.js?ver=192"></script>
	<script src="public/assets/js/charts.js"></script>
      <!--   Toastr js -->
      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript"><?php if(isset($message) && !empty($message)){print $message;}  ?></script>
</body>
</html>
