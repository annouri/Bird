<?php
class User_registration extends CI_Controller {

	public function verify ()
		
		{
			$result = UsersManagement::get_hash_value($_GET['email']); //get the hash value which belongs to given email from database
         	if($result)
         		{ 
					if($result==$_GET['hash'])
					{  
             		  UsersManagement::verify_user($_GET['email']);
	                }
         		}
         	echo "validated congratulation and welcome to Bird !";

		}



}
;?>