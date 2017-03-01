<?php
	class CKomentar extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			//$this->database();
			$this->load->model('MKomentar');
			$this->load->model('posting/MPosting');
		}

		public function index()
		{
			$this->load->view('VKomentar');
		}

		public function Komentar($id,$data)
		{
			$id=$this->uri->segment(4);
			if($this->input->post('comments') != '')
			{
				$this->MKomentar->komentar($id);
				redirect(base_url('posting/CPosting/baca/'.$data));
			}
			else
			{
				echo " lengkapi data ";
				$this->index();
			}
		}

		public function Testimony($id,$data)
		{
			$id=$this->uri->segment(4);
			if($this->input->post('testimony') != '')
			{
				$this->MKomentar->testimony($id);
				$this->MPosting->hitung_komentar($data);
				redirect(base_url('posting/CPosting/baca/'.$data));
			}
			else
			{
				echo " lengkapi data ";
				$this->index();
			}
		}

		public function Tampil_komentar()
		{
			$param='comments';
			$data['query']=$this->MKomentar->get($param);
			$this->load->view('VTampil',$data);
		}

		public function Hapus()
		{
			$id=$this->uri->segment(4);
			if($this->MKomentar->hapus($id)== true)
			{
				redirect('komentar/CKomentar/Tampil');
			}
			else
			{
				echo "Data tidak ada";
				$this->Tampil();
			}
		}

		public function Ubah($id)
		{
			$id=$this->uri->segment(4);
			if(!empty($id))
			{
				if($this->MKomentar->ubah($id))
				{
					redirect('komentar/CKomentar/Tampil');
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
			$data['query']=$this->MKomentar->get_select($id);
			$this->load->view('VEdit',$data);
		}

		public function test($data)
		{
			echo "<pre>";
			print_r($data);
			echo "</pre>";
			exit;
		}
	}