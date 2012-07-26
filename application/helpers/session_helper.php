<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('is_valid_session'))
{
	function is_valid_session($session_user_id)
	{
		if ($session_user_id) 
		{
			$user = new User($session_user_id);

			if ($user) 
			{
				return true;
			}
		}

		return false;
	}
}

/* End of file session_helper.php */
/* Location: ./application/helpers/session_helper.php */