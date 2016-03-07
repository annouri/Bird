<?php
class User extends CI_Model {

	var $id_user=NULL;
	
	var $username='';
	var $first_name='';
	var $last_name='';
	var $email='';
	var $password='';
	var $function='';
	var $department='';

	var $manager_id='';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
	
	
}



?>