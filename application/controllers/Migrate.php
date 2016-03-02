<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {
	public function index()
	{	
		$this->load->library('migration');
		echo "string";

        if ($this->migration->latest() === FALSE)
        {
                show_error($this->migration->error_string());

        }
	}


}
