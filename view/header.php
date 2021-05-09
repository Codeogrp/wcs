<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="public/images/favicon.png">
<!-- Site Title  -->
<title>Wincash Services</title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="public/assets/css/vendor.bundle.css?ver=192">
<link rel="stylesheet" href="public/assets/css/style.css?ver=192" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="public/assets/css/theme.css?ver=192">

</head>


<body class="nk-body body-wider bg-light">

<div class="nk-wrap">
    <header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">
        <!-- Header @s -->
        <div class="header-main">
            <div class="header-container container">
                <div class="header-wrap">
                    <!-- Logo @s -->
                    <div class="header-logo logo">
                        <a href="index.php?p=accueil" class="logo-link">
                            
                            <img class="logo-dark" src="public/images/wcst.png" alt="logo">
                            <img class="logo-light" src="public/images/wcstw.png" alt="logo">
                        </a>
                    </div>

                    <!-- Menu Toogle @s -->
                    <div class="header-nav-toggle">
                        <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                            <div class="toggle-line">
                                <span></span>
                            </div>
                        </a>
                    </div>

                    <!-- Menu @s -->
                    <div class="header-navbar">
                        <nav class="header-menu" id="header-menu">
<ul class="menu">
<li class="menu-item">
    <a class="menu-link nav-link menu-toggle" href="#home">Accueil</a>
</li>
<li class="menu-item ">
    <a class="menu-link nav-link menu-toggle" href="#about">A propos</a>
</li>
<li class="menu-item ">
    <a class="menu-link nav-link menu-toggle" href="#offres">Offres</a>
</li>
<li class="menu-item ">
    <a class="menu-link nav-link menu-toggle" href="#contact">Contact</a>
</li>
<?php if(isset($_SESSION["islogin"]) && $_SESSION["islogin"]==1){?>
    <li class="menu-item ">
    <a class="menu-link nav-link" href="index.php?p=profil">Mon Compte</a>
</li>
   <?php }?>


</ul>

<ul class="menu-btns">
<?php if(isset($_SESSION["islogin"]) && $_SESSION["islogin"]==1){?>
   
<li><a href="index.php?p=logout" class="btn btn-md btn-auto btn-grad no-change"><span>Se deconnecter</span></a></li>

<?php } else{?>
    <li><a href="index.php?p=login" class="btn btn-md btn-auto btn-grad no-change"><span>Se connecter</span></a></li>
    <?php }?>
</ul>
</nav>
                    </div><!-- .header-navbar @e -->
                </div>                                                
            </div>
        </div><!-- .header-main @e -->
