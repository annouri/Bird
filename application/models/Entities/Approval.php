<?php
class Approval extends CI_Model {
	var $id_approval = NULL;
    var $id_user = '';
    var $initiator='';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
function initialize($data)
    {   
        $this->id_user = $data['id_user'];
        $this->initiator = $data['initiator'];
       
        
    }






}
;?>