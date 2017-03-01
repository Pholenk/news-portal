<?php
	class CNotifikasi extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('MNotifikasi');
		}

		public function index()
		{
			$this->load->view('VNotification');
		}

		public function Tambah()
		{
			if($this->input->post('notification_id') == '')
			{
				$this->MNotifikasi->notification();
				$this->Tampil();
			}
			else
			{
				echo " lengkapi data";
				$this->index();
			}
		}

		public function Tampil()
		{
			$data = $this->MNotifikasi->get();
			return $data;
		}

		public function aktif()
		{
			$query = $this->MNotifikasi->get_select();
			//$this->test($query);
			return $query;
		}

		public function Edit()
		{
			$kondisi='aktif';
			if($this->MNotifikasi->ubah($kondisi))
			{
				$query = $this->MNotifikasi->get_select();
				return $query;
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

