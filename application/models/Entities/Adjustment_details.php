<?php 
class Adjustment_details extends CI_Model {

		var $id_adjustment_detail=NULL;
		
		var $document_header_id=NULL;
		var $adjustment_date_creation='';
		var $user_id=NULL;

		
		

		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}

?>