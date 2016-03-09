<?php 
class Epn extends CI_Model {

		var $id_epn=NULL;
		var $adjustment_detail_id=NULL;
		var $part_number='';
		var $quantity='';
		var $lot='';
		var $location='';
		var $site='';
		var $std_unit_cost_mad='';
		var $net_adj_value_mad='';
		var $net_adj_value_dollar='';
		var $gross_epn='';
		
		

		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}

?>