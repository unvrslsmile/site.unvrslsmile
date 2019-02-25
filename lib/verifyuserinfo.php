<?php
    include "./db_connection.php";
    include "./set_timezone.php";
    include "./pwordhash.php";

    if(isset($_POST['u-signin'])){
        $nameemail = $_POST['uusername'];
        $password = $_POST['upassword'];
        $hasher = new pWordHash();

        $sqfrem = mysqli_query($link, "SELECT tbl_accounts.a_username, tbl_accounts.a_password, tbl_profile.p_fname FROM tbl_accounts INNER JOIN tbl_profile ON tbl_accounts.a_id=tbl_profile.a_id WHERE tbl_accounts.a_username='$nameemail'");
        
        while($r = mysqli_fetch_array($sqfrem)){
            $hashedpw = $hasher->verify($password, $r['a_password']);
            if($hashedpw == 1 || $hashedpw == true){
                echo "true";
            }
        }
    }
    else{
        echo "false";
    }
?>