<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Insert_default_user extends CI_Migration {

	public function up()
	{
		$user = new User();

		$user->username = 'admin';
		$user->password_hash = 'password';
		$user->confirm_password_hash = $user->password_hash;

		$user->save();
	}

	public function down()
	{
		$user = new User();

		$user->get_by_username('admin');

		$user->delete();
	}

}