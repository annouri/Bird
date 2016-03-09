<?php

class Approval_signaturesManagement extends CI_Model {

    public function get_all_approval_signature()
    {

    }
    public function get_approval_signature_by_document($id_documentHeader)
    {}
    public function get_approval_signature_by_date($dateMin,$dateMax)
    {}
    
    public function get_message_user($userA,$userB)
    {
        $this->db->select('*');
        $this->db->from('messages');
        $this->db->join('users', 'users.id_user = messages.id_to');
        $this->db->where('messages.id_to',$userA);
        $this->db->where('messages.id_from',$userB);
        
        $this->db->or_where('messages.id_to',$userB);
        $this->db->where('messages.id_from',$userA);
        $this->db->order_by('messages.message_created_date', 'DESC');

        $result = $this->db->get();
        $result = $result->result();

        $this->load->model('entities/messages');
        $temporary_message_element = new Messages();
        
        foreach ($result as $key => $value) 
        {   
            $temporary_message_element->id_message = $value->id_message;
            $temporary_message_element->id_from = $value->id_from;
            $temporary_message_element->id_to = $value->id_to;
            $temporary_message_element->message_content = $value->message_content;
            $temporary_message_element->message_seen = $value->message_seen;
            $temporary_message_element->message_created_date=$value->message_created_date;
             $message->message_object=$result->message_object;
            $msgs[$key]=$temporary_message_element;
        }
        return $msgs;
    }
    
    public function get_message($id)
    {
        $this->db->select('*');
        $this->db->where('id_message',$id);
        $this->db->from('messages');
        $result = $this->db->get('message');
        $result = $result->result();
        if(count($result)>0)
        {
            $this->load->model('entities/message');
            $message = new Messages();
            $result = $result[0];
            $message->id_message=$result->id_message;
            $message->id_from=$result->id_from;
            $message->id_to=$result->id_to;
            $message->message_content=$result->message_content;
            $message->message_seen=$result->message_seen;
            $message->message_created_date=$result->message_created_date;
            $message->message_object=$result->message_object;
            
            return $message;
        }
        else
            return false;
    }

    public function add_message($message)
    {
        $this->db->insert('messages',$message);
    }

    public function update_message($message)
    {
        $this->db->where('id_message',$message->id);
        $this->db->update('messages',$message);
    }

    public function delete_user($id)
    {
        $this->db->where('id_message',$id);
        $this->db->delete('messages');
    }

}

?>