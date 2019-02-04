<?php
    session_start();
    if(!empty($_COOKIE['usertoken']) && !empty($_COOKIE['username']) || isset($_SESSION['usertoken']) && isset($_SESSION['username'])){
        include "./pages/basehome.php";
    }
    else{
        include "./pages/base.php";
    }   
?>