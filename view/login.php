
<?php  
//include('model/utilisateurs/u_login.php') ;
  
 extract($_SESSION);
$_SESSION["message"]="";
if(isset($_SESSION["islogin"]) && $_SESSION["islogin"]==1){
    $_SESSION["message"]='toastr.error("Vous êtes déja connecté !")';
    header("Location:index.php?p=accueil");
  }
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
                    <form action="model/utilisateurs/u_login.php" method="POST">
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
                                 <button value="1" name="login" type="submit" class="btn btn-primary btn-block btn-md">Se connecter</button>
                            </div>
                            <div class="forget-link fz-6">
                                <a href="#">Mot de passe oublié?</a>
                            </div>
                        </div>
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
   <!--   Toastr js -->
   <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript"><?php if(isset($message) && !empty($message)){print $message;}  ?></script>

</body>
</html>
