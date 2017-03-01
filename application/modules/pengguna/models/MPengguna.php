<?php
class MPengguna extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
	public function tampil()
	{
		$this->load->database();
		$this->db->from('users');
		$query=$this->db->get();
		return $query->result();
	}
}
?>