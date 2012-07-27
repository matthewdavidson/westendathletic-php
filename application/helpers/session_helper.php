<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('is_valid_session'))
{
	function is_valid_session()
	{
		$CI =& get_instance();

		if ($CI->session->userdata('user_id')) 
		{
			$user = new User($CI->session->userdata('user_id'));

			if ($user->exists())
	  	{
	  		return true;
	  	}
	  	else
	  	{
	  		$CI->session->unset_userdata('user_id');
	  		return false;
	  	}
		}
	}
}

if ( ! function_exists('authentication_required'))
{
	function authentication_required()
	{
		$CI =& get_instance();
		
		if ( ! is_valid_session())
		{
			$CI->session->set_flashdata('alerts', array('warn' => 'You must be logged in to view this page.'));
  		redirect('/');
		}
	}
}

/* End of file session_helper.php */
/* Location: ./application/helpers/session_helper.php */