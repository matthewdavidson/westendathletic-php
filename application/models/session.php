<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends DataMapper {

	var $validation = array(

	  'username' => array(
	    'label' => 'Username',
	    'rules' => array('required'),
	  ),

	  'password' => array(
	    'label' => 'Password',
	    'rules' => array('required', 'encrypt'),
	  )
	  
	);

	function create()
	{
		if (isset($this->username) && isset($this->password))
		{
			$this->load->model('users_model');

			$this->user = $this->users_model->authenticate($this->username, $this->password);

			if ( ! $this->user) 
			{
				$this->errors->add('base', 'Username and password combination is invalid');
			}
		}
	}

}

/* End of file sessions.php */
/* Location: ./application/models/session_model.php */