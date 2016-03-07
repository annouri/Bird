<?php

// Author : Annouri Ilias
// Description : Class managing the user

class Document_headerManagement {
    
    
    public static function get_all_document_header()
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('document_header');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Document_header');
            $temporary_Document_header_element = new Document_header();
            
            $temporary_Document_header_element->id_Document_header = $value->id_Document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->user_id=$value->user_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->manager_id=$value->manager_id;
            $temporary_Document_header_element->location = $value->location;
            $Document_headers[$key]=$temporary_Document_header_element;
            }
        return $Document_headers;   
        }
        else
            return false;
    }
    
    
    public static function get_document_header_by_user($email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('document_header')
                                 ->join('users','document_header.user_id=users.id_user')
                                 ->where('users.email',$email);
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Document_header');
            $document_header = new Document_header();
            
             $temporary_Document_header_element->id_Document_header = $value->id_Document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->user_id=$value->user_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->manager_id=$value->manager_id;
            $temporary_Document_header_element->location = $value->location;
            $Document_headers[$key]=$temporary_Document_header_element;
            }
        return $Document_headers;   
        }
        else
            return false;
    }
    public static function get_document_header_by_manager($manager_email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('document_header')
                                 ->join('managers','document_header.manager_id=managers.id_manager')
                                 ->where('users.email',$email);
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Document_header');
            $document_header = new Document_header();
            
             $temporary_Document_header_element->id_Document_header = $value->id_Document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->user_id=$value->user_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->manager_id=$value->manager_id;
            $temporary_Document_header_element->location = $value->location;
            $Document_headers[$key]=$temporary_Document_header_element;
            }
        return $Document_headers;   
        }
        else
            return false;
    }
    public static function get_document_header_by_location($location)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('document_header')
                                 ->where('location',$location);
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Document_header');
            $document_header = new Document_header();
            
            $temporary_Document_header_element->id_Document_header = $value->id_Document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->user_id=$value->user_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->manager_id=$value->manager_id;
            $temporary_Document_header_element->location = $value->location;
            
            
            $Document_headers[$key]=$temporary_Document_header_element;
            }
        return $Document_headers;   
        }
        else
            return false;
    }



    

    public static function set_document_header($Document_header)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->db->insert('Document_header',$Document_header);

    }

   

}

?>