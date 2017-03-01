<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class CAuth extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Ion_auth_model');
	}

	public function login()
	{
		$identity = $this->input->post('name');
		$password = $this->input->post('pass');
		$remember = $this->input->post('remember');
		$d = $this->ion_auth->login($identity, $password, $remember);

		if($d)
		{
			$n = $this->ion_auth->user()->row();
			$name = $n->first_name.' '.$n->last_name;
			$data = array('username'=>$name);
			$this->session->set_userdata($data);
		}
		redirect(base_url('pengguna/CPengguna'));
	}

	public function is_login()
	{
		if($this->ion_auth->logged_in())
		{
			echo "TRUE";
		}
	}

	public function logout()
	{
		if($this->ion_auth->logged_in())
		{
			if($this->ion_auth->logout())
			{
				$this->session->sess_destroy();
				redirect(base_url());
			}	
		}
	}
}