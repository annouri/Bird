<?php 
class Document_header extends CI_Model {

		var $id_document_header=NULL;
		
		var $type='';
		var $category='';
		var $description='';
		var $edition='';
		var $root_cause='';
		var $corective_actions='';
		var $responsibles='';
		var $due_date='';
		var $location='';
		
		var $user_id='';
		var $manager_id='';

		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}

?>