<?php
    include "./db_connection.php";
    include "./set_timezone.php";
    include "./pwordhash.php";
    session_start();

    if(isset($_POST['u-signin'])){
        $nameemail = $_POST['uusername'];
        $password = $_POST['upassword'];
        $hasher = new pWordHash();

        if(isset($_POST['u-autolog'])){
            $keeplogged = $_POST['u-autolog'];
        }
        else{
            $keeplogged = 0;
        }

        $sqpwverif = mysqli_query($link, "SELECT tbl_accounts.a_username, tbl_accounts.a_password, tbl_profile.p_fname, tbl_profile.p_lname, tbl_profile.p_photo FROM tbl_accounts INNER JOIN tbl_profile ON tbl_accounts.a_id=tbl_profile.a_id WHERE tbl_accounts.a_username='$nameemail' OR tbl_accounts.a_email='$nameemail'");
 
        if(mysqli_num_rows($sqpwverif) >= 1){
            while($r = mysqli_fetch_array($sqpwverif)){
                $hashedpw = $hasher->verify($password, $r['a_password']);
                if($hashedpw == true && mysqli_num_rows($sqpwverif) == 1){
                    if($keeplogged == 0){
                        $_SESSION['usertoken'] = sha1(date("YmdHis")."".$r['a_username']);
                        $_SESSION['username'] = $r['a_username'];
                        $_SESSION['name'] = $r['p_fname']." ".$r['p_lname'];
                        $_SESSION['avatar'] = $r['p_photo'];
                        echo "true";
                    }
                    else if($keeplogged == 1){
                        echo "true";
                    }
                    else{
                        echo "Please uncheck 'Keep me logged in' then click Sign In again.";
                    }
                }
                else{
                    echo "Please try again.";
                    break;
                }
            }

        }
        else{
            echo "Username/Email and Passwords do not match.";
        }
    }
    else{
        echo "An error occured. Please try again. 0x01";
    }
?>