<?php
	class MContact_us extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
			$config = array(
				'field' => 'feed_author_email',
				'title' => 'feed_content',
				'table' => 'tb_user_feeds',
				'id' => 'feed_id',
				'replacement' => 'dash'
				);
			$this->load->library('slug',$config);
			$this->load->helper('form');
		}

		public function Contact_us()
		{
			$tgl=gmdate('Y-m-d');
			$data=array(
			'feed_author' => $this->input->post('nama'),
			'feed_author_email' => $this->input->post('email'),
			'feed_content' => $this->input->post('content'),
			'feed_date' => $tgl,
			'feed_status' =>'pending',
			'feed_ip' => $this->input->ip_address(),
			'feed_type' =>'contact'
			);
			$this->db->insert('tb_user_feeds',$data);
			return true;
		}

		public function get()
		{
			$this->db->where('feed_type','contact');
			$this->db->from('tb_user_feeds');
			$query=$this->db->get();
			return $query->result();
		}

		public function get_select($id)
		{
			$this->db->where('feed_id',$id);
			$this->db->from('tb_user_feeds');
			$query=$this->db->get();
			return $query->result();
		}
}


		