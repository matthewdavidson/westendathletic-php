<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends DataMapper {

	var $validation = array(

	  'username' => array(
	    'label' => 'Username',
	    'rules' => array('required', 'trim', 'unique', 'alpha_dash', 'min_length' => 3, 'max_length' => 20),
	  ),

	  'password_hash' => array(
	    'label' => 'Password',
	    'rules' => array('required', 'min_length' => 6, 'encrypt'),
	  ),

	  'confirm_password_hash' => array(
	    'label' => 'Confirm Password',
	    'rules' => array('required', 'encrypt', 'matches' => 'password_hash'),
	  ),

	  'password_salt' => array(
	    'label' => 'Password Salt',
	    'rules' => array('required'),
	  )

	);

	function authenticate()
	{
		$user = new User();

		$user->where('username', $this->username)->get();

		$this->password_salt = $user->password_salt;

		$this->validate()->get();

		if($this->exists())
		{
			return $this;
		}
		else
		{
			return null;
		}
	}

	function _encrypt($field)
	{
	  if ( ! empty($this->{$field}))
	  {
      if (empty($this->password_salt))
      {
          $this->password_salt = sha1(uniqid(rand(), true));
      }

      $this->{$field} = sha1($this->password_salt . $this->{$field});
	  }
	}
}

/* End of file user.php */
/* Location: ./application/models/user.php */