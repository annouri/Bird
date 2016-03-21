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
                         'userd_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'managerd_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        
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
                                'type' => 'DATETIME',
                                
                        ),
                        'location' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                
                        ),
                        'document_header_creation_date' => array(
                                'type' => 'DATETIME',
                                
                        ),
                        'document_header_updated_date' => array(
                                'type' => 'DATETIME',
                                
                        ),
                        
                       
                        
                ));
                $this->dbforge->add_key('id_document_header',TRUE);
                $this->dbforge->create_table('document_header');
                $this->db->query('ALTER TABLE document_header ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE document_header ADD CONSTRAINT FOREIGN KEY (userd_id) REFERENCES users(id_user) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE document_header ADD CONSTRAINT FOREIGN KEY (managerd_id) REFERENCES managers(id_manager) ON UPDATE CASCADE ON DELETE CASCADE;');
                

                echo '<td><i class="fa fa-check"></i></td>';
               // $this->seed();
                
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('document_header');
        }
        public function seed()
       {
            
        $this->load->model('entities/document_header');
        $document_header = new Document_header();
        for ($i=1; $i <5; $i++) { 
            

            $document_header->type = "type[".$i." ]";
            $document_header->category = "category[".$i."]";
            $document_header->description = "description[".$i."]";
            $document_header->edition ="edition[".$i."]@gmail.com";
            $document_header->root_cause="root_cause[".$i."]";
            $document_header->corective_actions="corective_actions[".$i."]";
            $document_header->responsibles="responsibles[".$i."]";
            $document_header->location="location[".$i."]";
            $document_header->userd_id="userd_id[".$i."]";
            $document_header->managerd_id="managerd_id[".$i."]";
            
            
            $this->db->insert('document_header',$document_header);

            }
        
        }

        
}

?>




