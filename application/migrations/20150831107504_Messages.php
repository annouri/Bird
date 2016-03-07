<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Messages extends CI_Migration {

        public function up()
        {
                echo '<tr><td>Users</td>';
                $this->dbforge->add_field(array(
                        'id_message' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'object' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'content' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'date' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        

                        'date' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                       
                        'sender' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'receiver' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        
                        
                ));
                $this->dbforge->add_key('id_message',TRUE);
                $this->dbforge->create_table('messages');
                $this->db->query('ALTER TABLE messages ENGINE=InnoDB;');
                
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('messages');
        }

        
}

?>




