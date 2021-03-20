<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_m extends CI_Model{

	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		if($id != null){
			$this->db->where('category_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = array(
			'name' => $post['category_name'],
		);
		$this->db->insert('tbl_category', $params);
	}

	public function edit($post)
	{
		$params = array(
			'name' => $post['category_name'],
			'updated' => date('Y-m-d H:i:s')
		);
		$this->db->where('category_id', $post['id_category']);
		$this->db->update('tbl_category', $params);
	}

	public function del($id)
	{
		$this->db->where('category_id', $id);
		$this->db->delete('tbl_category');
	}
}
