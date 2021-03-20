<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_m extends CI_Model {

	public function get($id = null){
		$this->db->from('tbl_customers');
		if($id != null){
			$this->db->where('id_customer', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function del($id){
		$this->db->where('id_customer', $id);
		$this->db->delete('tbl_customers');
	}

	public function add($post){
		$data = array(
			'namacustomer' => $post['namacustomer'],
			'keterangan' => $post['keterangan']
		);
		$this->db->insert('tbl_customers', $data);
	}

	public function edit($post){
		$data = array(
			'namacustomer' => $post['namacustomer'],
			'keterangan' => $post['keterangan']
		);
		$this->db->where('id_customer', $post['customer_id']);
		$this->db->update('tbl_customers', $data);
	}

}
