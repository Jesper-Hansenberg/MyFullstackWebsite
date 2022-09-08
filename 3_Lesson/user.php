<?php
class User{

private $email;    
private $username;   
private $password;

public function __construct(){

}    

function get_name() {
    return $this->username;
}

}
?>