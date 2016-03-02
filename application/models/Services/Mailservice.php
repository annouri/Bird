<?php

class MailService{

	
	public static function send_mail($message)
	{
		$CI_instance =& get_instance();
		$CI_instance->load->library('email');

		$CI_instance->email->to('elgarrabhamza@gmail.com');

		$CI_instance->email->subject('Email Test');
		$CI_instance->email->message($message->content);

		$CI_instance->email->send();
	}

}

?>