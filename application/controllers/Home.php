<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("front/header");
		$this->load->view("front/register");
		$this->load->view("front/footer");
	}
}
?>
