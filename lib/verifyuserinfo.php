<?php
    include "./db_connection.php";
    include "./set_timezone.php";
    include "./pwordhash.php";
    session_start();

    if(isset($_POST['u-signin'])){
        $nameemail = $_POST['uusername'];
        $password = $_POST['upassword'];
        $hasher = new pWordHash();

        $sqfrem = mysqli_query($link, "SELECT tbl_accounts.a_username, tbl_accounts.a_password, tbl_profile.p_fname, tbl_profile.p_lname, tbl_profile.p_photo FROM tbl_accounts INNER JOIN tbl_profile ON tbl_accounts.a_id=tbl_profile.a_id WHERE tbl_accounts.a_username='$nameemail' OR tbl_accounts.a_email='$nameemail'");
        
        while($r = mysqli_fetch_array($sqfrem)){
            $hashedpw = $hasher->verify($password, $r['a_password']);
            if($hashedpw == 1 || $hashedpw == true){
                echo "true";

                $_SESSION['usertoken'] = sha1(date("YmdHis")."".$r['a_username']);
                $_SESSION['username'] = $r['a_username'];
                $_SESSION['name'] = $r['p_fname']." ".$r['p_lname'];
                $_SESSION['avatar'] = $r['p_photo'];
            }
            else{
                echo "false";
            }
        }
    }
    else{
        echo "false";
    }
?>