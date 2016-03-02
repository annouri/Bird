<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("front/header");
		$this->load->view("front/register");
		$this->load->view("front/footer");
	}
	public function user_register()
	{
		$this->load->model('entities/Users');
		$user = new Users();
		$user->initialize($this->input->post());

		UsersManagement::set_user($user);
		redirect(base_url()."Home", "location");

	}
		
}
?>
