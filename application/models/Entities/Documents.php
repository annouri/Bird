<?php
class Documents extends CI_Model {
var $id = NULL;
    var $type = '';
    var $mouvement ='';
    var $category = '';
    var $description = '';
    var $ManagerApproval = '';
    var $adjustment_details = '';
    var $edition = '';
    var $action_plan ='';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

}






?>