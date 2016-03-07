<?php
// autheor Annouri ilias
// Migration class : Action_plam to creat Action_plan table in the data base
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Adjustment_detail extends CI_Migration {
 
	 public function up()
	 	{
	 	echo '<tr><td>Adjustment</td>';
                $this->dbforge->add_field(array(
                        'id_adjustment_details' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'part_number' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'quantity' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'lot' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'location' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'site' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'std_unit_cost_mad' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'net_adj_value_mad' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'net_adj_value_dollar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'gross_dollar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                ));
		$this->dbforge->add_key('id_adjustment_detail',TRUE);
                $this->dbforge->create_table('adjustment_details');
                
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
}

 public function down()
        {
                $this->dbforge->drop_table('adjustment_details');
        }
}



;?>