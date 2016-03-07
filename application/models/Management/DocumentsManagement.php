<?php

// Author : Annouri Ilias
// Description : Class managing the user

class DocumentsManagement {
    
    public static function get_document_by_id(&id)
    {
        $CI_instance= & get_instance();
        $CI_instance->load->model('entities/Documents');
        $query = $CI_instance->db->where('id_document',$id)
                                    >from('documents');
        return $query->count_all_results()>0;
        //Getting query result
        $result = $query->get();
        $result = $result->result();
        $result = $result[0];

        //Instancianting a new user
        $document = Array();
        $document['id_document'] = $result->id_document;
        $document['type'] = $result->type;
        $document['category'] = $result->category;
        $document['Description'] = $result->Description;
        $document['edition' ]= $result->edition;
        $document['date_document_creation ']= $result->date_document_creation;
        

        //Returning result
        return $document;

    }
    public static function set_document($document)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->db->insert('documents',$document);
;
    }

    public static function set_user($user)
    {
    	//Getting CI Instance
    	$CI_instance = & get_instance();
    	$CI_instance->db->insert('Users',$user);
    }
   public static function get_user($email)
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
        $user['id'] = $result->id;
        $user['email'] = $result->email;
        $user['password'] = $result->password;
        $user['first_name'] = $result->first_name;
        $user['last_name' ]= $result->last_name;
        $user['password ']= $result->password;
        $user['acces' ]= $result->acces;
        $user['function' ]= $result->function;

        //Returning result
        return $user;
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
        $user['id'] = $result->id;
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