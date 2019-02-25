<?php
    session_start();
    unset($_COOKIE['usertoken']);
    unset($_COOKIE['username']);
    unset($_COOKIE['name']);
    unset($_COOKIE['avatar']);
    session_destroy();
    header("location: index.php");
    h
?>