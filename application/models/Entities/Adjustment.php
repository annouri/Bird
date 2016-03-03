<?php 
/**
* 
*/
class Adjustment extends CI_Model
{
	var $id = NULL;
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






}

;?>