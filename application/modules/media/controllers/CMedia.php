<?php
	class CMedia extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
			//$this->load->database();
			$this->load->model('MMedia');
		}

		public function index()
		{
			$this->load->view('VUpload');
		}

		public function Simpan()
		{
			$config['upload_path'] = './gambar/';
			$config['allowed_types'] = 'gif|jpg|png|bmp';
			//$config['file_name'] = $this->input->post('judul');
			$config['max_size'] = '3000';
			$this->load->library('upload',$config);
			
			if($this->upload->do_upload('gambar'))
			{
				$data=array('upload_data' => $this->upload->data());
				$this->test($data);
			}
			else
			{
				$this->load->view('gagal');
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