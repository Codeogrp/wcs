<?php 
//session_start();
extract($_SESSION);
$_SESSION["message"]="";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wincash Services | Profil</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="public/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="public/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="public/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="public/admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="public/admin/assets/images/wcst.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="public/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                                   <img src="data:image/png;base64,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" alt="profile">

                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  
                 
                  <p class="mb-1 text-black"><span class="font-weight-bold mb-2"><?php echo $mail; ?></span></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?p=logout">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="public/admin/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="public/admin/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="public/admin/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="index.php?p=logout">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="data:image/png;base64,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" alt="profile">
                  <span class="login-status online"></span>
                 <!-- <img src="public/admin/assets/images/faces/face1.jpg" alt="profile">change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $mail; ?></span>
                 
                </div> 
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Mon Pack</span>
                <i class="mdi mdi-user menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Retraits</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-cash-multiple menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Demander un Retrait</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Historique de Retraits</a></li>
                </ul>
              </div>
            </li>
             
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="" target="_blank">Wincash Services</a>. Tous droits réservés.</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="public/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="public/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="public/admin/assets/js/off-canvas.js"></script>
    <script src="public/admin/assets/js/hoverable-collapse.js"></script>
    <script src="public/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="public/admin/assets/js/dashboard.js"></script>
    <script src="public/admin/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
 <?php include_once('toastr/toastr.php')?>

  </body>
</html>