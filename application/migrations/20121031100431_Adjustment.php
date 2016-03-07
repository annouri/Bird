<?php
// autheor Annouri ilias
// Migration class : Action_plam to creat Action_plan table in the data base
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Adjustment extends CI_Migration {
 
	 public function up()
	 	{
	 	echo '<tr><td>Adjustment</td>';
                $this->dbforge->add_field(array(
                        'id_adjustment' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_adjustment_details' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                
                        ),
                        'id_document_header' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                
                        ),

                        
                        
                ));
		$this->dbforge->add_key('id_adjustment',TRUE);
                $this->dbforge->create_table('adjustment');
                $this->db->query('ALTER TABLE contrat ADD CONSTRAINT fk_adjustment_detailID FOREIGN KEY (id_adjustment_adjustment_detailsId) REFERENCES Adjustment_details(id_adjustment_details) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE contrat ADD CONSTRAINT fk_adjustment_documentHeaderID FOREIGN KEY (id_adjustment_document_headerId) REFERENCES Document_header(id_document_header) ON UPDATE CASCADE ON DELETE CASCADE;');
                
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
}

 public function down()
        {
                $this->dbforge->drop_table('adjustment');
        }
}



;?>