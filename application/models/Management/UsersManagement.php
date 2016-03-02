<?php

// Author : Annouri Ilias
// Description : Class managing the user

class UsersManagement {
    
    public static function login($user)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->load->model('entities/admin');

    	//Selecting data from the database
    	$query = $CI_instance->db->where('email',$user->email)
                                    ->where('password',$user->password)
                                    ->from('admins');
        return $query->count_all_results()>0;
    }

    public static function set_user($user)
    {
    	//Getting CI Instance
    	$CI_instance = & get_instance();
    	$CI_instance->db->insert('Users',$user);
    }
   

}

?>