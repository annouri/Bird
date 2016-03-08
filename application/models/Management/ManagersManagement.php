<?php

// Author : Annouri Ilias
// Description : Class managing the user

class ManagersManagement {
    
    
    public static function get_all_managers()
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('managers');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();
       
        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            
             $CI_instance->load->model('entities/Manager');
            $temporary_manager_element = new Manager();
            $temporary_manager_element->id_manager = $value->id_manager;
            $temporary_manager_element->manager_username = $value->manager_username;
            $temporary_manager_element->manager_first_name = $value->manager_first_name;
            $temporary_manager_element->manager_last_name = $value->manager_last_name;
            $temporary_manager_element->manager_email = $value->manager_email;
            $temporary_manager_element->manager_department=$value->manager_department;
            $temporary_manager_element->manager_password=$value->manager_password;
            $temporary_manager_element->manager_function=$value->manager_function;
            $managers[$key]=$temporary_manager_element;
            }
        return $managers;   
        }
        else
            return false;
    }
    
    
    public static function get_manager_by_email($email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->where('manager_email',$email)
                                 ->from('managers');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();
        
        if(count($result)>0)
        {
        $CI_instance->load->model('entities/Manager');
        $result = $result[0];

        //Instancianting a new user
        $manager = Array();
        $manager['id_manager'] = $result->id_manager;
        $manager['manager_username'] = $result->manager_username;
        $manager['manager_first_name'] = $result->manager_first_name;
        $manager['manager_last_name'] = $result->manager_last_name;
        $manager['manager_email' ]= $result->manager_email;
        $manager['manager_department ']= $result->manager_department;
        $manager['manager_password'] = $result->manager_password;
        $manager['manager_function' ]= $result->manager_function;
        
        return $manager;
        }
        else return false;
    }
    public static function get_users_manager($email_manager)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('users')
                                 ->join('managers','users.manager_id = managers.id_manager')
                                 ->where('managers.manager_email',$email_manager);
        
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
           
            foreach ($result as $key => $value) 
            {   
          
            $CI_instance->load->model('entities/User');
            $temporary_user_element = new User();
            
            $temporary_user_element->manager_id = $value->manager_id;
            $temporary_user_element->id_user = $value->id_user;
            $temporary_user_element->username = $value->username;
            $temporary_user_element->first_name = $value->first_name;
            $temporary_user_element->last_name = $value->last_name;
            $temporary_user_element->email = $value->email;
            $temporary_user_element->department=$value->department;
            $temporary_user_element->password=$value->password;
            $temporary_user_element->function=$value->function;
            $users[$key]=$temporary_user_element;
            
            }
        return $users;   
        }
        else
            return false;
    }

    public static function set_manager($manager)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->db->insert('managers',$manager);

    }

   

}

?>