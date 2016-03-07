<?php
// autheor Annouri ilias
// Migration class : Action_plam to creat Action_plan table in the data base
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Documents extends CI_Migration {
 
     public function up()
        {
                echo '<tr><td>Action_plan</td>';
                $this->dbforge->add_field(array(
                        'id_document' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_document_header' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'id_user' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                
                        ),
                        'id_adjustment' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'id_user_approval' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        
                ));
                $this->dbforge->add_key('id_document',TRUE);
                $this->dbforge->create_table('document');
                $this->db->query('ALTER TABLE contrat ADD CONSTRAINT fk_document_headerID FOREIGN KEY (Document_header_id) REFERENCES Document_header(id_document_header) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE contrat ADD CONSTRAINT fk_document_adjustmentID FOREIGN KEY (adjustment_id) REFERENCES adjustment(id_adjustment) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE contrat ADD CONSTRAINT fk_document_userApprovalID FOREIGN KEY (user_approval_id) REFERENCES Document_header(id_document_header) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE contrat ADD CONSTRAINT fk_document_userID FOREIGN KEY (user_id) REFERENCES Document_header(id_document_header) ON UPDATE CASCADE ON DELETE CASCADE;');
                
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
}

 public function down()
        {
                $this->dbforge->drop_table('document');
        }
}



;?>