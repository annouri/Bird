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
		var $document_header_creation_date='';
		var $document_header_updated_date='';
		
		var $userd_id=NULL;
		var $managerd_id=NULL;

		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}

?>