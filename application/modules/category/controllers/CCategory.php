<?php
	class CCategory extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
			$this->load->database();
			$this->load->model('MCategory');
			$this->load->model('Ion_auth_model');
		}

		public function index()
		{
			if($this->ion_auth->is_admin())
			{
				$data['query']=$this->MCategory->get();
				$this->load->view('back-end/head');
				$this->load->view('back-end/topnav');
				$this->load->view('Admin/sidebar');
				$this->load->view('VTampil',$data);
				$this->load->view('back-end/foot');
			}
			else
			{
				redirect(base_url().'pengguna/CPengguna');
			}
		}

		public function Tambah()
		{
			if($this->ion_auth->is_admin())
			{
				if($this->input->post('nama') != '')
				{
					if ($this->input->post('parent') != 'none')
					{
						$data['category_parent'] = $this->input->post('parent');
						if($this->MCategory->category())
						{
							redirect('category/CCategory');
						}
						else
						{
							echo "Data tidak ada";
							$this->Tampil();
						}
					}
					else
					{
						$data['category_parent'] = 0;
						if($this->MCategory->category())
						{
							redirect('category/CCategory');
						}
					}
				}
				else
				{
					if($this->ion_auth->is_admin())
					{
						$data['query']=$this->MCategory->get();
						$this->load->view('back-end/head');
						$this->load->view('back-end/topnav');
						$this->load->view('Admin/sidebar');
						$this->load->view('VTambah',$data);
						$this->load->view('back-end/foot');
					}
				}
			}
			else
			{
				redirect(base_url().'pengguna/CPengguna');
			}
		}

		public function Delete()
		{
			if($this->ion_auth->is_admin())
			{
				$id=$this->uri->segment(4);
				if($this->MCategory->hapus($id) == true)
				{
					redirect('category/CCategory/');
				}
				else
				{
					$this->index();
				}
			}
			else
			{
				redirect(base_url().'pengguna/CPengguna');
			}
		}

		public function Ubah($idc)
		{
			if($this->ion_auth->is_admin())
			{
				if(!empty($idc))
				{
					if ($this->input->post('parent') != 'none')
					{
						$data['category_parent'] = $this->input->post('parent');
						if($this->MCategory->ubah($idc))
						{
							redirect('category/CCategory');
						}
						else
						{
							echo "Data tidak ada";
							$this->index();
						}
					}
					else
					{
						$data['category_parent'] = 0;
						if($this->MCategory->ubah($idc))
						{
							redirect('category/CCategory');
						}
						else
						{
							echo "Data tidak ada";
							$this->index();
						}
					}
				}
			}
			else
			{
				redirect(base_url().'pengguna/CPengguna');
			}
		}

		public function Edit()
		{
			if($this->ion_auth->is_admin())
			{
				$id=$this->uri->segment(4);
				$data['query'] = $this->MCategory->get_select($id);
				$this->load->view('VEdit',$data);
			}
			else
			{
				redirect(base_url().'pengguna/CPengguna');
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
		
