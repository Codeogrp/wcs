 
<?php 
session_start();
//require_once('../model/utilisateurs/u_login.php');
extract($_SESSION); 
//   print $_SESSION["mail"];
//session_destroy();
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/favicon.png">
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
                    <a href="./" class="ath-logo"><img src="public/images/wcstw.png" srcset="public/images/wcstw.png" alt="logo"></a>
                </div>
                <div class="ath-body">
                    <h5 class="ath-heading title">Connectez vous !</h5>
                    <form action="#" method="POST">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" name="mail" placeholder="Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" name="mdp" placeholder="Mot de passe">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pdb-r">
                            <div class="field-item pb-0">
                                <input class="input-checkbox" name="remember" id="remember-me-2" type="checkbox">
                                <label for="remember-me-2">Se rappeler de moi</label>
                            </div>
                            <div class="forget-link fz-6">
                                <a href="#">Mot de passe oublié?</a>
                            </div>
                        </div>
                        <button value=1 name="login" class="btn btn-primary btn-block btn-md">Se connecter</button>
                    </form>
                    
                </div>
                <div class="ath-note text-center tc-light">
                Vous n'avez pas encore de compte? <a href="index.php?p=register"> <strong>Inscrivez vous ici..</strong></a>                </div>
            </div>
        </main>
    
	</div>
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="public/assets/js/jquery.bundle.js?ver=192"></script>
	<script src="public/assets/js/scripts.js?ver=192"></script>
	<script src="public/assets/js/charts.js"></script>
 <?php include_once('toastr/toastr.php')?>
</body>
</html>
