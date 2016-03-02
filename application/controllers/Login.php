<?php
class Login extends CI_Controller {

	public function index()
	{
		$this->load->view("front/header");
		$this->load->view("front/Login");
		$this->load->view("front/footer");
	}
	public function user_login()
	{
		$this->load->model('entities/Users');
		$user = new Users();
		$user->initialize_login($this->input->post());

		UsersManagement::login($user);
		var_dump($user);
		if (UsersManagement::login($user)) {
			echo "hello";
			# code...
		}
		else
			echo "not helloe";
	}
		
}
?>
