<?php
	class CSearch extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			//$this->load->database();
			$this->load->model('MSearch');
			$this->load->model('posting/MPosting');
			$this->load->model('category/MCategory');
			$this->load->library('Recaptcha');
		}

		public function index()
		{
			$this->load->view('VPosting');
		}

		public function kosong()
		{
			$data['query']='tidak ada';
			$this->load->view('VEdit',$data);
		}

		public function Cari()
		{
			$d=$this->input->post('data');
			if($d != '')
			{
				$data['captcha'] = $this->recaptcha->getWidget();
				$data['script_captcha'] = $this->recaptcha->getScriptTag();
				$data['result'] = $this->MSearch->cari($d);
				if(!empty($data['result']))
				{
					$this->load->view('front-end/head-index',$data);
					$this->load->view('front-end/top-nav-index');
					$this->load->view('front-end/blog-search',$data);
					//$this->load->view('front-end/body-index',$data);
					$this->load->view('front-end/foot-index');
				}
			}
			else
			{
				$this->kosong();
			}
		}

		public function Tampil($id)
		{
			$data['query']= $id;
			$this->load->view('head');
			$this->load->view('topnav');
			if($this->ion_auth->is_admin())
			{
				$this->load->view('Admin/sidebar');
			}
			else
			{
				$this->load->view('Member/sidebar');
			}
			$this->load->view('VTampil',$data);
			$this->load->view('foot');
		}

		public function Hapus($id)
		{
			$id=$this->uri->segment(4);
			if(!empty($id))
			{
				if($this->MPosting->hapus($id) == true)
				{
					redirect('posting/CPosting/Tampil');
				}
			}
			else
			{
				echo "Data tidak ada";
				$this->Tampil();
			}
		}

		public function Ubah($id)
		{
			if(!empty($id))
			{
				if($this->MPosting->ubah($id) != '')
				{
					$author=$this->ion_auth->user()->row();
					$name=$this->MPosting->ubah($id);
					$config['upload_path'] = './gambar/';
					$config['allowed_types'] = 'gif|jpg|png|bmp';
					$config['file_name'] = $name;
					$config['max_size'] = '3000';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar'))
					{
						$data=array(
								'post_name' => $this->upload->data('file_name'),
								'post_date' => gmdate('Y-m-d'),
								'post_modified' => gmdate('Y-m-d'),
								'post_mime_type' => $this->upload->data('image_type'),
								'post_author' => $author->username,
								'post_parent' => $id);
						
						if($this->MMedia->simpan($data))
						{
							$query=$this->MPosting->get_select($name);
							$data2 = $this->MPosting->itung($query);
							$this->test($data2);
							$data1= array('post_id' => print $query['post_id'],
										'category_id' => $this->input->post('kategori')
										);
							if($this->MPosting->simpan_kategori($data1))
							{
								redirect('posting/CPosting/Tampil');
							}

						}
						
					}
				}
				else
				{
					echo "Data tidak ada";
					$this->Tampil();
				}
			}
		}
		public function Edit()
		{
			$id=$this->uri->segment(4);
			$data['query'] = $this->MPosting->get_select($id);
			$data['query1'] = $this->MCategory->get();
			//
			$this->load->view('head');
			$this->load->view('topnav');
			if($this->ion_auth->is_admin())
			{
				$this->load->view('Admin/sidebar');
			}
			else
			{
				$this->load->view('Member/sidebar');
			}
			$this->load->view('VEdit',$data);
			$this->load->view('foot');
 		}

		public function test($data)
		{
			echo "<pre>";
			print_r($data);
			echo "</pre>";
			exit;
		}
	}