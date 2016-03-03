<?php
class Action_plan extends CI_Model {
var $id = NULL;
    var $root_cause = '';
    var $corective_actions ='';
    var $responsibles = '';
    var $description = '';
    var $due_date = '';
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