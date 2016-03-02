<?php

// Author Annouri ilias
// Description : Class representing a user and containing it's informations

class Users extends CI_Model {

	var $id = NULL;
    var $username = '';
    var $first_name = '';
    var $last_name = '';
    var $password ='';
    var $avatar = '';
    var $label = '';
    var $function='';
    var $email = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

}

?>