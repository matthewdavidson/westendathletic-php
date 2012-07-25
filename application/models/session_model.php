<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session_model extends CI_Model {

	var $username = '';
	var $password = '';

	function __construct()
	{
		parent::__construct();
	}

	function build($params = array())
	{
		if (isset($params['username']) && isset($params['password']))
		{
			$this->username = $params['username'];
			$this->password = $params['password'];
		}
	}

	function is_valid()
	{
		return false;
	}

}

/* End of file sessions.php */
/* Location: ./application/models/session_model.php */