<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(

			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),

			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),

			'password_hash' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),

			'password_salt' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}

}