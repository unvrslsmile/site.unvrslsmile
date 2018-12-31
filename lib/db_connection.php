<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbse = "db_unvrslsmile";

    //Do not modify codes below. Thanks

    $link = mysqli_connect($host, $user, $pass, $dbse);
    if(!$link){
        die("Database Connection Failed" . mysqli_error($connection));
    }
?>