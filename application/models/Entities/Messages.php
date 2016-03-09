<?php
class Messages extends CI_Model {

	var $id_messages=NULL;
	var $object='';
	var $content='';
	var $date='';
	var $id_from=NULL;
	var $id_to=NULL;
	var $message_created_date='';

	

	

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
	

}

?>