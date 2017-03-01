<?php
	class MCategory extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
			$config = array(
			'field' 		=> 'category_slug',
			'title' 		=> 'category_name',
			'table' 		=> 'tb_category',
			'id'			=> 'category_id',
			'replacement' 	=> 'dash'
				);
			$this->load->library('slug', $config);
		}

		public function category()
		{
			$data=array(
			'category_name' 	=> $this->input->post('nama'),
			'category_desc' 	=> $this->input->post('deskripsi'),
			'category_slug' 	=> $this->slug->create_uri($this->input->post('nama'))
			);
			$this->db->insert('tb_category', $data);
			return true;
		}
		
		public function get()
		{
			$this->db->from('tb_category');
			$query=$this->db->get();
			return $query->result();
		}

		public function get_terms()
		{
			$this->db->from('tb_terms');
			$query=$this->db->get()->result();
			return $query;
		}

		public function get_select($idc)
		{
			$this->load->database();
			$this->db->where('category_id', $idc);
			$this->db->from('tb_category');
			$query=$this->db->get();
			return $query->result();
		}

		public function ubah($idc)
		{
			$data=array(
			'category_name' 	=> $this->input->post('nama'),
			'category_desc' 	=> $this->input->post('deskripsi'),
			'category_slug' 	=> $this->slug->create_uri($this->input->post('nama')),
			'category_parent'	=> $this->input->post('parent')
			);
			$this->db->where('category_id', $idc);
			$this->db->update('tb_category', $data);
			return true;
		}

		public function hapus($idc)
		{
			$this->db->delete('tb_category',array('category_id'=>$idc));
		}
	}