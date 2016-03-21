<?php

// Author : Annouri Ilias
// Description : Class managing the user

class Adjustment_detailsManagement {
    
    
    public static function get_all_adjustment_details()
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('adjustment_details');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Adjustment_details');
            $adjustment_detail = new Adjustment_details();
            
            $adjustment_detail->id_adjustment_detail = $value->id_adjustment_detail;
            $adjustment_detail->document_header_id = $value->document_header_id;
            $adjustment_detail->adjustment_date_creation = $value->adjustment_date_creation;
           
            $adjustments_details[$key]=$temporary_adjustment_detail_header_element;
            }
        return $adjustments_details;   
        }
        else
            return false;
    }
    
    
   
    public static function get_adjustment_details_by_user($email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('document_header')
                                 ->join('users','document_header.userd_id=users.id_user')
                                 ->where('users.email',$email);
        
        //Getting query result
           $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Document_header');
            $temporary_Document_header_element = new Document_header();
            
            $temporary_Document_header_element->id_document_header = $value->id_document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->due_date = $value->due_date;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->userd_id=$value->userd_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->managerd_id=$value->managerd_id;
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
                                 ->join('managers','document_header.managerd_id=managers.id_manager')
                                 ->where('managers.manager_email',$manager_email);
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/Document_header');
            $temporary_Document_header_element = new Document_header();
            
            $temporary_Document_header_element->id_document_header = $value->id_document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->due_date = $value->due_date;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->userd_id=$value->userd_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->managerd_id=$value->managerd_id;
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
            $temporary_Document_header_element = new Document_header();
            
            $temporary_Document_header_element->id_document_header = $value->id_document_header;
            $temporary_Document_header_element->type = $value->type;
            $temporary_Document_header_element->due_date = $value->due_date;
            $temporary_Document_header_element->category = $value->category;
            $temporary_Document_header_element->description = $value->description;
            $temporary_Document_header_element->edition = $value->edition;
            $temporary_Document_header_element->root_cause=$value->root_cause;
            $temporary_Document_header_element->corective_actions=$value->corective_actions;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->userd_id=$value->userd_id;
            $temporary_Document_header_element->responsibles=$value->responsibles;
            $temporary_Document_header_element->managerd_id=$value->managerd_id;
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