<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Document_header extends CI_Migration {

        public function up()
        {
                echo '<tr><td>Users</td>';
                $this->dbforge->add_field(array(
                        'id_document_header' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'type' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'category' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'description' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        

                        'edition' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                       
                        'root_cause' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'corective_actions' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'responsibles' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'due_date' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'location' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'manager_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        
                ));
                $this->dbforge->add_key('id_document_header',TRUE);
                $this->dbforge->create_table('document_header');
                $this->db->query('ALTER TABLE document_header ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE document_header ADD CONSTRAINT fk_document_header_userID FOREIGN KEY (user_id) REFERENCES users(id_user) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE document_header ADD CONSTRAINT fk_document_header_managerID FOREIGN KEY (manager_id) REFERENCES managers(id_manager) ON UPDATE CASCADE ON DELETE CASCADE;');
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('document_header');
        }

        
}

?>




