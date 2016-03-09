<?php 
class Approval_signatures extends CI_Model {

	var $id_approval_signature=NULL;
	var $adjustment_detail_id=NULL;
	var $date_approval_init='';
	var $time_limite='';
	var $date_approv_lock='';
		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }



}

?>