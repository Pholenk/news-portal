<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('posting/MPosting');
		$this->load->model('category/MCategory');
		$this->load->library('Recaptcha');
	}

	public function index()
	{
		$data['captcha'] = $this->recaptcha->getWidget();
		$data['script_captcha'] = $this->recaptcha->getScriptTag();
		$data['category'] = $this->MCategory->get();
		
		//$this->test($this->session);
		$this->load->view('front-end/head-index',$data);
		$this->load->view('front-end/top-nav-index');
		//$this->load->view('front-end/blog-single');
		$this->load->view('front-end/body-index',$data);
		$this->load->view('front-end/foot-index');
	}
	public function test($data)
		{
			echo "<pre>";
			print_r($data);
			echo "</pre>";
			exit;
		}
}
