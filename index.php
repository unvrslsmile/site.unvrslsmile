<?php
    session_start();
    if(!empty($_COOKIE['usertoken']) && !empty($_COOKIE['username']) || isset($_SESSION['usertoken']) && isset($_SESSION['username'])){
        include "./pages/feed.php";
    }
    else{
        include "./pages/landing.php";
    }   
?>