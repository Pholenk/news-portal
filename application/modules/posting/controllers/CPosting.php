<?php
	class CPosting extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			//$this->load->database();
			$this->load->model('MPosting');
			$this->load->model('category/MCategory');
			$this->load->model('media/MMedia');
			$this->load->model('komentar/MKomentar');
			$this->load->library('Recaptcha');
		}

		public function index()
		{
			$data['query1'] = $this->MCategory->get();
			$this->load->view('back-end/head');
			$this->load->view('back-end/topnav');
			if($this->ion_auth->is_admin())
			{
				$this->load->view('Admin/sidebar');
			}
			else
			{
				$this->load->view('Member/sidebar');
			}
			$this->load->view('VPosting',$data);
			$this->load->view('back-end/foot');
		}

		public function Tambah()
		{
			if($this->input->post('judul') != '')
			{
				$id= $this->MPosting->posting();
				if(!empty($id))
				{	
					$query=$this->MPosting->get_select($id);
					foreach ($query as $key)
					{
						$data1['post_id']=$key->post_id;
						$data1['category_id']=$this->input->post('kategori');
						$this->MPosting->simpan_kategori($data1);
					}
					
					$config['upload_path'] = './gambar/';
					$config['allowed_types'] = 'gif|jpg|png|bmp';
					$config['file_name'] = $id;
					$config['max_size'] = '3000';
					$config['overwrite'] = 'TRUE';
					$this->load->library('upload',$config);
					
					if($this->upload->do_upload('gambar'))
					{
						$source = $this->upload->data('file_name');
						$config1['image_library']='gd2';
						$config1['source_image']='./gambar/'.$source;
						$config1['create_thumb'] = TRUE;
						$config1['maintain_ratio'] = TRUE;
						$config1['width'] = 75;
						$config1['height'] = 50;
						$this->load->library('image_lib',$config1);
						$this->image_lib->resize();
						$author=$this->ion_auth->user()->row();
						$query = $this->MPosting->get_select($id);
						foreach ($query as $result)
						{
							$data=array(
									'post_name' => $this->upload->data('file_name'),
									'post_date' => gmdate('Y-m-d'),
									'post_modified' => gmdate('Y-m-d'),
									'post_mime_type' => $this->upload->data('image_type'),
									'post_author' => $author->username,
									'post_parent' => $result->post_id);
							$this->MMedia->simpan($data);
							redirect(base_url('posting/CPosting/Tampil'));
						}
					}
				}
				
			}
			else
			{
				$this->index();
			}
		}

		public function Tampil()
		{
			$data['query']=$this->MPosting->get();
			$this->load->view('back-end/head');
			$this->load->view('back-end/topnav');
			if($this->ion_auth->is_admin())
			{
				$this->load->view('Admin/sidebar');
			}
			else
			{
				$this->load->view('Member/sidebar');
			}
			$this->load->view('VTampil',$data);
			$this->load->view('back-end/foot');
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
					$config['file_name'] = $id;
					$config['max_size'] = '3000';
					$config['overwrite'] = 'TRUE';
					$this->load->library('upload',$config);
					
					if($this->upload->do_upload('gambar'))
					{
						$source = $this->upload->data('file_name');
						$config1['image_library']='gd2';
						$config1['source_image']='./gambar/'.$source;
						$config1['create_thumb'] = TRUE;
						$config1['maintain_ratio'] = TRUE;
						$config1['width'] = 75;
						$config1['height'] = 50;
						$this->load->library('image_lib',$config1);
						$this->image_lib->resize();

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
/*							$data2 = $this->MPosting->itung($query);
							$this->test($data2);*/
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
			$this->load->view('back-end/head');
			$this->load->view('back-end/topnav');
			if($this->ion_auth->is_admin())
			{
				$this->load->view('Admin/sidebar');
			}
			else
			{
				$this->load->view('Member/sidebar');
			}
			$this->load->view('VEdit',$data);
			$this->load->view('back-end/foot');
 		}

 		public function baca($id)
 		{
 			$id= $this->uri->segment(4);
 			if(!empty($id))
 			{
 				$this->MPosting->hitung_baca($id);
 				$data['captcha'] = $this->recaptcha->getWidget();
				$data['script_captcha'] = $this->recaptcha->getScriptTag();
				$data['news'] = $this->MPosting->get_select($id);	
				
				$this->load->view('front-end/head-index',$data);
				$this->load->view('front-end/top-nav-index');
				$this->load->view('front-end/blog-single',$data);
				//$this->load->view('front-end/body-index',$data);
				$this->load->view('front-end/foot-index');
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