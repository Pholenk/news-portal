<?php
	class MNotifikasi extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
			
		public function notification()
		{
			$tgl=date('Y-m-d',strtotime($this->input->post('tgl')));
			$data=array(
				'notification_id'  => $this->input->post('idn'),
				'notification_type' => $this->input->post('type'),
				'notification_user' => $this->input->post('user'),
				'notification_parent' => $this->input->post('parent'),
				'notification_desc' => $this->input->post('desc'),
				'notification_status' => 'aktif',
				'notification_icon' => $this->input->post('icon'),
				'notification_date' => $tgl,
				);
				$this->db->insert('tb_notification',$data);
				return true;	
		}

		public function get()
		{
			$this->db->from('tb_notification');
			$query=$this->db->get();
			return $query->result(); 
		}

		public function get_select()
		{
			$this->db->where('notification_status','aktif');
			$this->db->from('tb_notification');
			$query=$this->db->get();
			return $query->num_rows();
		}

		public function ubah($id)
		{
			$data=array(
				'notification_status' => 'tidak',
				);
				$this->db->where('notification_status',$id);
				$this->db->update('tb_notification',$data);
				return true;
		}
	}	