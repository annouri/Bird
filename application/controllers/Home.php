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
		$this->send_confirmation();
		redirect(base_url()."Home/verif", "location");

	}

public function verif()
{
    $this->load->view("front/header");
    $this->load->view("front/Email_send");
    $this->load->view("front/footer");

}


  
  public function send_confirmation() {
        
      

      $this->email->from('gerant.youpel@gmail.com', 'Lear Tangier'); //sender's email
      $address = $_POST['email'];	//receiver's email
      $subject="Welcome to Bird!";	//subject
      $message= /*-----------email body starts-----------*/
        'Thanks for signing up, '.$_POST['first_name'].'!
      
        Your account has been created. 
        Here are your login details.
        -------------------------------------------------
        Email   : ' . $_POST['email'] . '
        Password: ' . $_POST['password'] . '
        -------------------------------------------------
                        
        Please click this link to activate your account:
            
        ' . base_url() . 'index.php/user_registration/verify?' . 
        'email=' . $_POST['email'] . '&hash=' .UsersManagement::get_hash_value($_POST['email']);
		/*-----------email body ends-----------*/		      
      $this->email->to($address);
      $this->email->subject($subject);
      $this->email->message($message);
      $this->email->send();
      
    }
		
}
?>
