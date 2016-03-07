<?php
// autheor Annouri ilias
// Migration class : Action_plam to creat Action_plan table in the data base
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Document_header extends CI_Migration {
 
	 public function up()
	 	{
	 			echo '<tr><td>Action_plan</td>';
                $this->dbforge->add_field(array(
                        'id_document_header' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'id_user' => array(
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
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'edition' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'root_cause' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'corective_actions' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'responsibles' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        
                        'due_date' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'date_document_creation' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                ));
				$this->dbforge->add_key('id_action_plan',TRUE);
                $this->dbforge->create_table('action_plan');
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
}

 public function down()
        {
                $this->dbforge->drop_table('action_plan');
        }
}



;?>