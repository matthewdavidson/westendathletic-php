<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends DataMapper {

	var $validation = array(

	  'username' => array(
	    'label' => 'Username',
	    'rules' => array('required', 'trim', 'unique', 'alpha_dash', 'min_length' => 3, 'max_length' => 20),
	  ),

	  'password' => array(
	    'label' => 'Password',
	    'rules' => array('required', 'min_length' => 6, 'encrypt'),
	  ),

	  'confirm_password' => array(
	    'label' => 'Confirm Password',
	    'rules' => array('required', 'encrypt', 'matches' => 'password'),
	  )

    );
}

/* End of file user.php */
/* Location: ./application/models/user.php */