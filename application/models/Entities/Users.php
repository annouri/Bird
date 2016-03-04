<?php

// Author Annouri ilias
// Description : Class representing a user and containing it's informations

class Users extends CI_Model {

	var $id = NULL;
    var $username = '';
    var $first_name = '';
    var $last_name = '';
    var $password ='';
    var $is_verified= '';
    var $hash = '';
    var $function='';
    var $email = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
        function initialize($data)
    {   
        $this->username = $data['username'];
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->is_verified = "0";
        $this->hash = md5(rand(0,1000));
        $this->password = md5($data['password']);
        $this->function = $data['function'];
        $this->email = $data['email'];
        
    }
        function initialize_login($data)
    {   
        $this->username = $data['username'];
        $this->password = $data['password'];
        
        
    }

}

?>