<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session_model extends CI_Model {

	var $username = '';
	var $password = '';
	var $user = null;
	var $is_invalid = false;

	function __construct($params = array())
	{
		parent::__construct();

		if (isset($params['username']) && isset($params['password']))
		{
			$this->username = $params['username'];
			$this->password = $params['password'];
		}
	}

	function is_valid()
	{
		if (isset($this->username) && isset($this->password))
		{
			$user = new User();
			$user->username = $this->username;
			$user->password_hash = $this->password;

			$this->user = $user->authenticate();

			if ($this->user) 
			{
				return true;
			}
		}

		$this->is_invalid = true;
		return false;
	}

}

/* End of file sessions.php */
/* Location: ./application/models/session_model.php */