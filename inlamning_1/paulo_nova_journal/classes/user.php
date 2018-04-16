<?php 

class Users{
    public $userID;
    public $username;
    public $password;

    function __construct($userID, $username, $password){
        $this->userID = $userID;
        $this->username = $username;
        $this->password = $password;

    }

    function printUsers(){
        echo "ID: " . $this->userID;
        echo "Username: " . $this->username;
        echo "Password: " . $this->password;
    }

}

?>