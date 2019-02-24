<?php
class pWordHash{
    function encrypt($pass){
        $opts = [ "cost" => 10 ];
		$saltypass = password_hash($pass, PASSWORD_BCRYPT, $opts);
        return $saltypass;
    }
	
	function verify($pass, $hash){
		$saltypass = password_verify($pass, $hash);
        return $saltypass;
	}
}
?>