<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class CPengguna extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Ion_auth_model');
		$this->load->model('notifikasi/MNotifikasi');
		//$this->load->library('Ion_auth');
	}

	public function index()
	{
		if($this->ion_auth->logged_in())
		{
			
			if($this->ion_auth->is_admin())
			{
				$this->load->view('back-end/head');
				$this->load->view('back-end/topnav');
				$this->load->view('Admin/sidebar');
				$this->load->view('Admin/VDashboard');
				$this->load->view('back-end/foot');
			}
			else
			{
				redirect(base_url());
				/*$this->load->view('body');*/
			}
		}
		else
		{
			$this->load->view('VLogin');
		}
	}
	
//			ADMIN   		//

	public function register()
	{
		if($this->ion_auth->is_admin())
		{
			$data['identity'] = $this->input->post('uname');
			if(!$this->ion_auth->identity_check($data['identity']) && $data['identity'] != '')
			{
				$identity = $this->input->post('uname');
				$password = $this->input->post('pass');
				$email = $this->input->post('email');
				$additional_data = array(
					'first_name'=> $this->input->post('first'),
					'last_name'=> $this->input->post('last'),
					'company'=> $this->input->post('company'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'),
					);
				$group = array($this->input->post('group')); // Sets user to admin.
				if($this->ion_auth->register($identity, $password, $email, $additional_data, $group))
				{
					redirect(base_url('pengguna/CPengguna/'));
				}
			}

			else
			{
				$this->load->view('back-end/head');
				$this->load->view('back-end/topnav');
				$this->load->view('Admin/sidebar');
				$this->load->view('Admin/VRegister');
				$this->load->view('back-end/foot');
			}
		}
		else
		{
			redirect(base_url('pengguna/CPengguna'));
		}
	}

	public function ubah($id)
	{
		if($this->ion_auth->is_admin())
		{
			$data = array(
					'identity'=>$this->input->post('uname'),
					'password' => $this->input->post('pass'),
					'first_name'=> $this->input->post('first'),
					'last_name'=> $this->input->post('last'),
					'company'=> $this->input->post('company'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email')
					);
				
			if($this->ion_auth->update($id,$data))
			{
				redirect(base_url('pengguna/CPengguna/Tampil'));
			}
		}
		else
		{
			redirect(base_url('pengguna/CPengguna'));
		}
	}

	public function Delete()
	{
		if($this->ion_auth->is_admin())
		{
			$id=$this->uri->segment(4);
			if ($id != '')
			{
				if($this->ion_auth->delete_user($id))
				{
					redirect(base_url('pengguna/CPengguna/Tampil'));
				}
			}
		}
		else
		{
			redirect(base_url('pengguna/CPengguna'));
		}
	}

	public function Edit()
	{
		if($this->ion_auth->is_admin())
		{
			$id=$this->uri->segment(4);
			if($id != '')
			{
				$data['data'] = $this->ion_auth->user($id)->result();
				if(!empty($data['data']))
				{
					$this->load->view('back-end/head');
					$this->load->view('back-end/topnav');
					$this->load->view('Admin/sidebar');
					$this->load->view('Admin/VEdit',$data);
					$this->load->view('back-end/foot');
				}
				else
				{
					redirect(base_url().'pengguna/CPengguna/Tampil');
				}
			}
			else
			{
				redirect(base_url().'pengguna/CPengguna/Tampil');
			}
		}
		else
		{
			redirect(base_url('pengguna/CPengguna'));
		}
	}

	public function Tampil()
	{
		if($this->ion_auth->is_admin())
		{
			$data = array('query' => $this->ion_auth->users()->result());
			$this->load->view('back-end/head');
			$this->load->view('back-end/topnav');
			$this->load->view('Admin/sidebar');
			if(!empty($data['query']))
			{
				$this->load->view('Admin/VPengguna',$data);
			}
			else
			{
				$data = array('query' => 'kosong');
			}
			$this->load->view('back-end/foot');
		}
		else
		{
			redirect(base_url('pengguna/CPengguna'));
		}
	}

	public function test($data)
	{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		exit;
	}
}