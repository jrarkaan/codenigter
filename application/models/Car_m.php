<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Car_m extends CI_Model {

	public function get($id = null){
		$this->db->select('tbl_cars.*, tbl_cars.namamobil, tbl_cars.keterangan, tbl_cars.plat, tbl_category.name as jenis_mobil');
		$this->db->from('tbl_cars');
		$this->db->join('tbl_category', 'tbl_category.category_id = tbl_cars.category_id');
		if($id != null){
			$this->db->where('id_car', $id);
		}
		//$this->db->order_by('category_id', 'asc');
		$query = $this->db->get() ;
		return $query;
	}

	public function add($post)
	{
		$params = [
			'category_id' => $post['category_name'],
			'plat' => $post['plat'],
			'namamobil' => $post['namamobil'],
			'keterangan' => $post['keterangan'],
		];
		$this->db->insert('tbl_cars', $params);
	}

	public function del($id)
	{
		$this->db->where('id_car', $id);
		$this->db->delete('tbl_cars');
	}

	public function edit($post)
	{
		$params = array(
			'category_id' => $post['category_name'],
			'plat' => $post['plat'],
			'namamobil' => $post['namamobil'],
			'keterangan' => $post['keterangan'],
			'updated' => date('Y-m-d H:i:s')
		);
		$this->db->where('id_car', $post['car_id']);
		$this->db->update('tbl_cars', $params);
	}

}
