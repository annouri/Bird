<?php

// Author : Annouri Ilias
// Description : Class managing the user

class MessagesManagement {
    
    
    public static function get_all_messages()
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->from('messages');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/messages');
            $temporary_message_element = new message();
            
            $temporary_message_element->id_message = $value->id_message;
            $temporary_message_element->object = $value->object;
            $temporary_message_element->content = $value->content;
            $temporary_message_element->date = $value->date;
            $temporary_message_element->sender = $value->sender;
            $temporary_message_element->receiver=$value->receiver;
            
            $messages[$key]=$temporary_message_element;
            }
        return $messages;   
        }
        else
            return false;
    }
    public static function get_recived_messages($email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->where('reciver',$email)
                                 ->from('messages');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/messages');
            $temporary_message_element = new message();
            
            $temporary_message_element->id_message = $value->id_message;
            $temporary_message_element->object = $value->object;
            $temporary_message_element->content = $value->content;
            $temporary_message_element->date = $value->date;
            $temporary_message_element->sender = $value->sender;
            $temporary_message_element->receiver=$value->receiver;
            
            $messages[$key]=$temporary_message_element;
            }
        return $messages;   
        }
        else
            return false;
    }
    public static function get_send_messages($email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->where('sender',$email)
                                 ->from('messages');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/messages');
            $temporary_message_element = new message();
            
            $temporary_message_element->id_message = $value->id_message;
            $temporary_message_element->object = $value->object;
            $temporary_message_element->content = $value->content;
            $temporary_message_element->date = $value->date;
            $temporary_message_element->sender = $value->sender;
            $temporary_message_element->receiver=$value->receiver;
            
            $messages[$key]=$temporary_message_element;
            }
        return $messages;   
        }
        else
            return false;
    }


    
    
   public static function get_send_messages($email)
    {
        $CI_instance= & get_instance();
        
        $query = $CI_instance->db->select('*')
                                 ->where('sender',$email)
                                 ->or_where('receiver',$email)
                                 ->from('messages');
        
        //Getting query result
        $result = $query->get();
        $result = $result->result();

        if (count($result)>0)
        {
            foreach ($result as $key => $value) 
            {   
            $CI_instance->load->model('entities/messages');
            $temporary_message_element = new message();
            
            $temporary_message_element->id_message = $value->id_message;
            $temporary_message_element->object = $value->object;
            $temporary_message_element->content = $value->content;
            $temporary_message_element->date = $value->date;
            $temporary_message_element->sender = $value->sender;
            $temporary_message_element->receiver=$value->receiver;
            
            $messages[$key]=$temporary_message_element;
            }
        return $messages;   
        }
        else
            return false;
    }
    public static function set_message($message)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->db->insert('messages',$manager);

    }

   

}

?>