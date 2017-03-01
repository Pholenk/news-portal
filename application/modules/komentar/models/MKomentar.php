<?php
	class MKomentar extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

		}

		public function komentar($id)
		{
			$tgl=gmdate('Y-m-d');
			$data=array(
				'feed_author' => $this->session->userdata('username'),
				'feed_parent' => $id,
				'feed_content' => $this->input->post('comments'),
				'feed_date' => $tgl,
				'feed_type' => 'comments');
			$this->db->insert('tb_user_feeds',$data);
			return true;
		}

		public function testimony($id)
		{
			$tgl=gmdate('Y-m-d');
			$data=array(
				'feed_author' => $this->session->userdata('username'),
				'feed_parent' => $id,
				'feed_content' => $this->input->post('testimony'),
				'feed_date' => $tgl,
				'feed_type' => 'testimony');
			$this->db->insert('tb_user_feeds',$data);
			return true;
		}

		public function get_testimony($id)
		{
			$this->load->database();
			$this->db->where('feed_type','testimony');
			$this->db->where('feed_parent',$id);
			$this->db->from('tb_user_feeds');
			$query=$this->db->get();
			return $query->result();
		}

		public function get_komentar($id)
		{
			$this->load->database();
			$this->db->where('feed_type','comments');
			$this->db->where('feed_parent',$id);
			$this->db->from('tb_user_feeds');
			$query=$this->db->get();
			return $query->result();
		}

		public function ubah($id)
		{
			$data=array( 
				'feed_content' => $this->input->post('comments'));
			$this->db->where('feed_id',$id);
			$this->db->update('tb_user_feeds',$data);
		}

		public function hapus($id)
		{
			$data=array('feed_id' => $id);
			$this->db->delete('tb_user_feeds',$data);
			return true;
		}
	}