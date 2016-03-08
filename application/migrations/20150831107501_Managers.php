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
                $this->seed();
	}
	public function down()
        {
                $this->dbforge->drop_table('managers');
        }
    
    public function seed()
        {
            
        $this->load->model('entities/Manager');
        for ($i=1; $i <5; $i++) { 
            $manager = new Manager();

            $manager->manager_username = "manager[".$i." ]";
            $manager->manager_first_name = "manager_first_name[".$i."]";
            $manager->manager_last_name = "manager_last_name[".$i."]";
            $manager->manager_email ="manager[".$i."]@gmail.com";
            $manager->manager_password="strongpassword[".$i."]";
            $manager->manager_function="manager_function[".$i."]";
            $manager->manager_department="manager_department[".$i."]";
            
            
            $this->db->insert('managers',$manager);

            }
            
        }


}
;?>