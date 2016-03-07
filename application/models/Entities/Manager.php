<?php
class Manager extends CI_Model {

	var $id_manager=NULL;
	var $manager_username='';
	
	var $manager_first_name='';
	var $manager_last_name='';
	var $manager_email='';
	var $manager_password='';
	var $manager_function='';
	var $manager_department='';

	

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
	

}

?>