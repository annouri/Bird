<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Approval_managers extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
                        'id_Approval_manager' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'manager_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'Approval_signature_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                
                        ),
                        'status' => array(
                                 'type'=>'INT',
                                 'constraint' => '11',
                                 
                        ),
                        

                        'date_ap' => array(
                                'type' => 'DATETIME',
                                
                        ),
                       
                       
                        
                        
                ));
				$this->dbforge->add_key('id_Approval_manager',TRUE);
                $this->dbforge->create_table('Approval_managers');
                $this->db->query('ALTER TABLE Approval_managers ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE Approval_managers ADD CONSTRAINT FOREIGN KEY (manager_id) REFERENCES managers(id_manager) ON UPDATE CASCADE ON DELETE CASCADE;');
                $this->db->query('ALTER TABLE Approval_managers ADD CONSTRAINT FOREIGN KEY (Approval_signature_id) REFERENCES Approval_signatures(id_approval_signature) ON UPDATE CASCADE ON DELETE CASCADE;');
                

                //$this->seed() the function for inserting info into data
	}
	public function down()
        {
                $this->dbforge->drop_table('approval_signatures');
        }
    
    

            
        


}
;?>