<?php
class Documents extends CI_Model {
var $id_document = NULL;
    var $movement='';
    var $id_adjustment='';
    var $id_approval='';
    var $id_document_header='';
    var $id_user='';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
   function initialize($data)
    {   
        $this->movement = $data['movement'];
        $this->id_adjustment = $data['id_adjustment'];
        $this->id_approval = $data['id_approval'];
        $this->id_document_header = $data['id_document_header'];
        $this->id_user = $data['id_user'];
        
    }

}






?>