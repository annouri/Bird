<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Epn extends CI_Migration {

        public function up()
        {
                echo '<tr><td>Users</td>';
                $this->dbforge->add_field(array(
                        'id_epn' => array(
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
                        'part_number' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                
                        ),
                        'quantity' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                
                        ),
                        'lot' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'location' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'site' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                
                        ),
                        'std_unit_cost_mad' => array(
                               'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'net_adj_value_mad' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                
                        ),
                        'net_adj_value_dollar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'gross_epn' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        
                        
                        
                ));
                $this->dbforge->add_key('id_epn',TRUE);
                $this->dbforge->create_table('epn');
                $this->db->query('ALTER TABLE epn ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE epn ADD CONSTRAINT FOREIGN KEY (adjustment_detail_id) REFERENCES adjustment_details(id_adjustment_detail) ON UPDATE CASCADE ON DELETE CASCADE;');
                
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('Epn');
        }
        

        
}

?>




