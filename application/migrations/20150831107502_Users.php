<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Users extends CI_Migration {

        public function up()
        {
                echo '<tr><td>Users</td>';
                $this->dbforge->add_field(array(
                        'id_user' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'last_name' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        

                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                       
                        'function' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'department' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'manager_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        
                ));
                $this->dbforge->add_key('id_user',TRUE);
                $this->dbforge->create_table('users');
                $this->db->query('ALTER TABLE users ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE users ADD CONSTRAINT fk_users_fileID FOREIGN KEY (manager_id) REFERENCES managers(id_manager) ON UPDATE CASCADE ON DELETE CASCADE;');
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }

        
}

?>



