<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Messages extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_message' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_from' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'id_to' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'message_created_date' => array(
                                'type' => 'DATETIME',
                                
                        ),
                        'message_content' => array(
                                'type' => 'TEXT',
                        ),
                         'message_object' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'message_seen' => array(
                                'type' => 'INT',
                                'constraint' => '1'
                        )
                ));
                $this->dbforge->add_key('id_message', TRUE);
                $this->dbforge->create_table('messages');
                $this->db->query('ALTER TABLE messages ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE messages ADD CONSTRAINT FOREIGN KEY (id_from) REFERENCES users(id_user) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE messages ADD CONSTRAINT FOREIGN KEY (id_to) REFERENCES users(id_user) ON UPDATE CASCADE ON DELETE CASCADE;');
                //$this->seed();
        }

        public function down()
        {
                $this->dbforge->drop_table('messages');
        }

        public function seed()
        {
                $this->load->model('entities/Messages');
                $message = new Messages();
                $message->id_from=1;
                $message->id_to=2;
                $message->message_content='This is a funny message !';
                $message->message_object='good morning';
                $message->message_createdAt=date('Y-m-d H:i:s');
                $message->message_seen='false';
                $this->db->insert('messages',$message);
        }
}