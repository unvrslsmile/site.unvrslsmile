<?php
class pWordHash{
    function hasher($pass){
        $salt = bin2hex(openssl_random_pseudo_bytes(32, $cstrong));
        $presaltypass = $salt."".$pass;
        $opts = [ "cost" => 9 ];
        $saltypass = password_hash($presaltypass, PASSWORD_BCRYPT, $opts);
        return array("sp" => $saltypass, "slt" => $salt);
    }
}
?>