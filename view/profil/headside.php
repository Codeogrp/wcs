<?php include_once('header.php') ?>
<?php
if($_SESSION["isadmin"]==1){
    include_once('adminside.php') ;
}else{
    include_once('side.php'); 
}

?>
     