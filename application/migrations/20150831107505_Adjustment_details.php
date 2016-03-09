<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Adjustment_details extends CI_Migration {

        public function up()
        {       
                echo '<tr><td>Users</td>';
                $this->dbforge->add_field(array(
                        'id_adjustment_detail' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'document_header_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                        ),
                        
                        'adjustment_date_creation' => array(
                                'type' => 'DATETIME',
                                
                        ),
                        
                        
                ));
                $this->dbforge->add_key('id_adjustment_detail',TRUE);
                $this->dbforge->create_table('adjustment_details');
                $this->db->query('ALTER TABLE adjustment_details ENGINE=InnoDB;');
                $this->db->query('ALTER TABLE adjustment_details ADD CONSTRAINT FOREIGN KEY (document_header_id) REFERENCES document_header(id_document_header) ON UPDATE CASCADE ON DELETE CASCADE;');
               
                echo '<td><i class="fa fa-check"></i></td>';
               // $this->seed();
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('Adjustment_details');
        }
         public function seed()
        
        {
            
        $this->load->model('entities/Adjustment_details');
        
        $adjustment_details = new Adjustment_details();
        for ($i=1; $i <4 ; $i++) { 
            

            $adjustment_details->document_header_id =$i;
            $adjustment_details->adjustment_date_creation = "0".$i."/".$i."0/2016";
            
            
            
            
            $this->db->insert('Adjustment_details',$adjustment_details);

            }
            
        }

        
}

?>




