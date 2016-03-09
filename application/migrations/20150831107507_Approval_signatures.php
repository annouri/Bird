<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Approval_signatures extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
                        'id_approval_signature' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'adjustment_detail_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        'date_approval_init' => array(
                                'type' => 'DATETIME',
                                
                        ),
                        'time_limite' => array(
                                 'type'=>'DATETIME',
                                 
                        ),
                        

                        'date_approv_lock' => array(
                                'type' => 'DATETIME',
                                
                        ),
                       
                       
                        
                        
                ));
				$this->dbforge->add_key('id_approval_signature',TRUE);
                $this->dbforge->create_table('approval_signatures');
                $this->db->query('ALTER TABLE approval_signatures ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE approval_signatures ADD CONSTRAINT FOREIGN KEY (adjustment_detail_id) REFERENCES approval_signatures(id_approval_signature) ON UPDATE CASCADE ON DELETE CASCADE;');
                
                //$this->seed();
	}
	public function down()
        {
                $this->dbforge->drop_table('approval_signatures');
        }
    
    

            
        


}
;?>