<?php
    include "./db_connection.php";
    include "./set_timezone.php";
    include "./pwordhash.php";

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
            $bdateformat = $byear."-".$bmonth."-".$bday;
            $datenow = date("Y-m-d");
            $pws = new pWordHash(); // OOP here am I right. Haha
            $saltypass = $pws->encrypt($pass);
            mysqli_query($link, "INSERT INTO tbl_accounts(
                `a_username`,
                `a_password`,
                `a_isonline`,
                `a_lastonlinedate`,
                `a_createdate`,
                `a_status`,
                `a_role`
            ) VALUES(
                '$username',
                '$saltypass',
                '1',
                '$datenow',
                '$datenow',
                '1',
                '2'
            )");
            mysqli_query($link, "INSERT INTO tbl_profile(
                `a_id`,
                `p_fname`,
                `p_lname`,
                `p_nname`,
                `p_bdate`,
                `p_gender`,
                `p_photo`
            ) VALUES(
                (SELECT a_id FROM tbl_accounts WHERE a_username='$username' AND a_password='$saltypass'),
                '$firstname',
                '$lastname',
                '',
                '$bdateformat',
                '$gender',
                'default.png'
            )");
            /*mysqli_query($link, "INSERT INTO tbl_profile(
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
            )");*/

            echo "true";
        }
        else{
            echo "false";
        }
    }
    else{
        echo "false1";
    }
?>