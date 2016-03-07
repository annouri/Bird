<?php

// Author : Annouri Ilias
// Description : Class managing the user

class UsersManagement {
    
    public static function get_all_users()
    {

        $CI_instance= & get_instance();
        $CI_instance->load->model('entities/User');
        
        $query = $CI_instance->db->select('*')
                                  ->from('users');
        
        
        $result = $this->db->get();
        $result = $result->result();

        
        $temporary_user_element = new User();

        foreach ($result as $key => $value) 
        {   
            $temporary_user_element->id_user = $value->id_user;
            $temporary_user_element->username = $value->username;
            $temporary_user_element->first_name = $value->first_name;
            $temporary_user_element->last_name = $value->last_name;
            $temporary_user_element->email = $value->email;
            $temporary_user_element->department=$value->department;
            $temporary_user_element->password=$value->password;
            $temporary_user_element->function=$value->function;
            $user[$key]=$temporary_user_element;
        }
        return $user;

    }
    
    public static function get_user_by_email($email)
    {
        $CI_instance= & get_instance();
        $CI_instance->load->model('entities/User');
        $query = $CI_instance->db->where('email',$email)
                                    >from('users');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();
        $result = $result[0];

        //Instancianting a new user
        $user = Array();
        $user['id_user'] = $result->id_user;
        $user['username'] = $result->username;
        $user['first_name'] = $result->first_name;
        $user['last_name'] = $result->last_name;
        $user['email' ]= $result->email;
        $user['department ']= $result->department;
        $user['password'] = $result->password;
        $user['function' ]= $result->function;
        
        

        //Returning result
        return $user;

    }
    public static function get_manager_user($email_user)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('users')
                                 ->join('users','users.id_manager = managers.id_manager')
                                 ->where('users.email',$email_user);
        
        $result = $this->db->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Manager');
            $user = new Manager();
            
            $temporary_manager_element->id_manager = $value->id_manager;
            $temporary_manager_element->manager_username = $value->manager_username;
            $temporary_manager_element->manager_first_name = $value->manager_first_name;
            $temporary_manager_element->manager_last_name = $value->manager_last_name;
            $temporary_manager_element->manager_email = $value->manager_email;
            $temporary_manager_element->manager_department=$valumanager_e->manager_department;
            $temporary_manager_element->manager_password=$value->manager_password;
            $temporary_manager_element->manager_function=$value->manager_function;
            $manager[$key]=$temporary_manager_element;
            }
        return $manager;   
        }
        else
            return false;
    }
    public static function login($user)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->load->model('entities/users');

    	//Selecting data from the database
    	$query = $CI_instance->db->where('username',$user->username)
                                    ->where('password',$user->password)
                                    ->where('is_verified',1)
                                    ->from('users');
        return $query->count_all_results()>0;
    }

    public static function set_user($user)
    {
    	//Getting CI Instance
    	$CI_instance = & get_instance();
    	$CI_instance->db->insert('Users',$user);
    }
   
    public static function get_hash_value($email)
    {
        
 //Getting CI Instance
        $CI_instance =& get_instance();

        //Creating a new website
        $CI_instance->load->model('entities/Users');

        //Selecting data from the database
        $query = $CI_instance->db->where('email',$email)
                                    ->from('users');

        //Getting query result
        $result = $query->get();
        $result = $result->result();
        $result = $result[0];

        //Instancianting a new user
        $user = Array();
        $user['id_user'] = $result->id;
        $user['email'] = $result->email;
        $user['password'] = $result->password;
        $user['first_name'] = $result->first_name;
        $user['last_name' ]= $result->last_name;
        $user['password ']= $result->password;
        $user['hash' ]= $result->hash;
        $user['function' ]= $result->function;

        //Returning result
        return $user['hash'];
    }
    public static function verify_user($email)
    {
       //Getting CI Instance
        $CI_instance =& get_instance();
        //Creating a new website
        $CI_instance->load->model('entities/users');
        $data = array('is_verified' => 1);

        //Selecting data from the database
        $query = $CI_instance->db->where('email',$email)
                                    ->from('users')
                                    ->update('users',$data);
                                    
    }

}

?>