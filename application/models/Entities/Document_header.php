<?php
class Document_header extends CI_Model {
var $id_document_header = NULL;
    var $id_user='';
    var $id_manager='';
    var $type = '';
    var $category ='';
    var $description = '';
    var $edition ='';
    var $root_cause = '';
    var $corrective_action = '';
    var $responsible = '';
    var $due_date = '';
    
    var $date_document_creation='';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
   function initialize($data)
    {   
        $this->type = $data['type'];
        $this->id_user = $data['id_user'];
        $this->id_manager = $data['id_manager'];
        $this->category = $data['category'];
        $this->description = $data['description'];
        $this->edition = $data['edition'];
        $this->date_document_creation = $data['00/01/00'];

        $this->root_cause = $data['root_cause'];
        $this->corrective_action = $data['corrective_action'];
        $this->responsible = $data['responsible'];
        $this->due_date = $data['due_date'];
        
        
    }

}






?>