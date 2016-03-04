<?php
class Login extends CI_Controller {

	public function index()
	{
		$this->load->view("front/header");
		$this->load->view("front/index");
		$this->load->view("front/footer");
	}
	public function user_login()
	{
		$this->load->model('entities/Users');
		$user = new Users();
		$user->initialize_login($this->input->post());

		UsersManagement::login($user);
		if (UsersManagement::login($user)) {
			$this->load->view('front/header');
			$this->load->view('front/index',$user);
			$this->load->view('front/footer');
		}
		else
			redirect(base_url()."Login", "location");
	}
		
}
?>
