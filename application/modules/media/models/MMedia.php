<?php
	class MMedia extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
		}

		public function simpan($data)
		{
			$this->db->insert('tb_post',$data);
			return true;
		}
	}