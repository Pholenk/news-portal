<?php
	class CContact_us extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('MContact_us');
			//$this->load->helper(array('url', 'form'));
        	$this->load->library(array('form_validation', 'Recaptcha'));
		}

		public function index()
		{
			$data['query']=$this->MContact_us->get();
			$this->load->view('back-end/head');
			$this->load->view('back-end/topnav');
			$this->load->view('Admin/sidebar');
			$this->load->view('VTampil',$data);
			$this->load->view('back-end/foot');
		}

		public function Tambah()
		{
			$recaptcha = $this->input->post('g-recaptcha-response');
			$response = $this->recaptcha->verifyResponse($recaptcha);

			if($response['success'])
			{
				if($this->MContact_us->Contact_us())
				{
					echo "success";
					redirect(base_url());
				}
			}
			else
			{
				redirect(base_url());
			}
		}

		public function Tampil($id)
		{
			$data['query']=$this->MContact_us->get_select($id);
			$this->load->view('back-end/head');
			$this->load->view('back-end/topnav');
			$this->load->view('Admin/sidebar');
			$this->load->view('VContact_us',$data);
			$this->load->view('back-end/foot');
		}
		
	}