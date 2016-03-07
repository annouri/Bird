<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Managers extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
                        'id_manager' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'manager_username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'manager_first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'manager_last_name' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        

                        'manager_password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                       
                        'manager_function' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'manager_email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'manager_department' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        
                        
                ));
				$this->dbforge->add_key('id_manager',TRUE);
                $this->dbforge->create_table('managers');
	}
	public function down()
        {
                $this->dbforge->drop_table('managers');
        }


}
;?>