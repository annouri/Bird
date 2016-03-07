<?php 
/**
* 
*/
class Adjustment_details extends CI_Model
{
	var $id_adjustment_details = NULL;
    var $part_number = '';
    var $quantity = '';
    var $lot = '';
    var $location ='';
    var $site = '';
    
    var $std_unit_cost_mad='';
    var $net_adj_value_mad = '';
    var $net_adj_value_dollar='';

    var $gross_dollar= '';
	function __construct(argument)
	{
		//call the model constructor.
		parent::__construct();
	}
}
function initialize($data)
    {   
        $this->part_number = $data['part_number'];
        $this->quantity = $data['quantity'];
        $this->lot = $data['lot'];
        $this->location = $data['location'];
        $this->site = $data['site'];

        $this->std_unit_cost_mad = $data['std_unit_cost_mad'];
        $this->net_adj_value_mad = $data['net_adj_value_mad'];
        $this->net_adj_value_dollar = $data['net_adj_value_dollar'];
        $this->gross_dollar = $data['gross_dollar'];
        
        
    }






}

;?>