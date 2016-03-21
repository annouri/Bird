<?php 
class Notifications extends CI_Model {

		var $id_notification=NULL;
		
		var $from_id=NULL;
		var $to_id=NULL;
		var $texte='';
		var $date='';
		
		

		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}

?>