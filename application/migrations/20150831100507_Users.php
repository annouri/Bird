<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Users extends CI_Migration {

        public function up()
        {
                echo '<tr><td>Users</td>';
                $this->dbforge->add_field(array(
                        'id_user' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'last_name' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        'is_verified' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        'hash' => array(
                                 'type'=>'VARCHAR',
                                 'constraint' =>'200'
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                       
                        'function' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),

                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        
                ));
                $this->dbforge->add_key('id_user',TRUE);
                $this->dbforge->create_table('users');
                echo '<td><i class="fa fa-check"></i></td>';
                
                echo '<td><i class="fa fa-check"></i></td>';
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }

        
}

?>


<?php

