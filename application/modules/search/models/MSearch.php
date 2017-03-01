<?php
	class MSearch extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function cari($data)
		{
			$this->db->select('*');
			$this->db->like('post_title', $data);
			$this->db->or_like('post_content', $data);
			$this->db->where('post_parent',' is null');
			$query = $this->db->get('tb_post');
			return $query->result();
		}
	}