<?php
	class MPosting extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$config = array(
    		'field' => 'post_name',
    		'title' => 'post_title',
   		 	'table' => 'tb_post',
    		'id' => 'post_id',
    		'replacement' => 'dash'
			);
			$this->load->library('slug', $config);
		}

		public function posting()
		{
			$author=$this->ion_auth->user()->row();
			$name=$this->slug->create_uri($this->input->post('judul'));
			$tgl=gmdate('Y-m-d');
			$data=array(
			'post_title' => $this->input->post('judul'),
			'post_content' => $this->input->post('konten'),
			'post_name' => $name,
			'post_date' => $tgl,
			'post_modified' => $tgl,
			'post_author' => $author->username
			);
			$this->db->insert('tb_post', $data);
			return $name;
		}

		public function get()
		{
			$this->db->from('tb_post');
			$where = "post_parent is null";
			$this->db->where($where);
			$this->db->order_by('post_modified', 'DESC');
			$query=$this->db->get();
			return $query->result();
		}

		public function get_terms($id)
		{
			$this->db->from('tb_post');
			$this->db->where('post_id=',$id);
			return $this->db->get();
		}

		public function get_select($id)
		{
			$where = "post_parent is null";
			$this->db->where($where);
			$this->db->where('post_name',$id);
			$this->db->from('tb_post');
			$query=$this->db->get();
			return $query->result();
		}

		public function ubah($id)
		{
			$tgl=date('Y-m-d',strtotime($this->input->post('tgl')));
			$name = $this->slug->create_uri($this->input->post('judul'));
			$data=array(
			'post_title' => $this->input->post('judul'),
			'post_content' => $this->input->post('konten'),
			'post_modified' => $tgl,
			'post_name' => $name
			);

			$this->db->where('post_id', $id);
			$this->db->update('tb_post',$data);
			return $name;
		}

		public function hapus($id)
		{
			$this->db->delete('tb_post',array('post_id' => $id));
			return true;
		}

		public function simpan_kategori($id)
		{
			$this->db->insert('tb_terms', $id);
			return true;
		}

		public function hitung_baca($id)
		{
			$where=array('post_name'=>$id);
			$tambah=$this->db->get_where('tb_post',$where)->result();
			foreach($tambah as $key)
			{
				$data=array(
				'post_view'=>$key->post_view + 1);
				$this->db->where($where);
				$this->db->update('tb_post',$data);
			}
		}

		public function hitung_komentar($id)
		{
			$where=array('post_name'=>$id);
			$tambah=$this->db->get_where('tb_post',$where)->result();
			foreach($tambah as $key)
			{
				$data=array(
				'post_comment_count'=>$key->post_comment_count + 1);
				$this->db->where($where);
				$this->db->update('tb_post',$data);
			}
		}
	}