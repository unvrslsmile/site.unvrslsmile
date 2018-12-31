<?php
    include "./db_connection.php";
    include "./set_timezone.php";

    if(isset($_POST['u-signup'])){
        $username = $_POST['uusername'];
        $firstname = $_POST['ufname'];
        $lastname = $_POST['ulname'];
        $bmonth = $_POST['bmonth'];
        $bday = $_POST['bday'];
        $byear = $_POST['byear'];
        $gender = $_POST['ugender'];
        $email = $_POST['uemail'];
        $pass = $_POST['upass'];
        $confpass = $_POST['uconfpass'];

        if($pass == $confpass){
            $dateformat = $byear."-".$bmonth."-".$bday;
            mysqli_query($link, "INSERT INTO tbl_profile(
                `p_fname`,
                `p_lname`,
                `p_nname`,
                `p_bdate`,
                `p_gender`,
                `p_photo`
            ) VALUES(
                '$firstname',
                '$lastname',
                '',
                '$dateformat',
                '$gender',
                ''
            )");

            echo "true";
        }
        else{
            echo "false";
        }
    }
    else{
        echo "false";
    }
?>