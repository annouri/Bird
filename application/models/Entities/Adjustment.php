<?php 
/**
* 
*/
class Adjustment extends CI_Model
{
	var $id_adjustment = NULL;
    var $id_adjustment_details = '';
    
	function __construct(argument)
	{
		//call the model constructor.
		parent::__construct();
	}
}
function initialize($data)
    {   
        $this->id_adjustment_details = $data['id_adjustment_details'];
        
        
        
    }






}

;?>