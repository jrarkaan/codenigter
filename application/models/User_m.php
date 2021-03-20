<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post){
		$this->db->select("*");
		$this->db->from("tbl_users");
		$this->db->where("username", $post['username']);
		$this->db->where("password", sha1( $post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null){
		$this->db->from('tbl_users');
		if($id != null){
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post){
		$params = array(
			'name' => $post['fullname'],
			'username' => $post['username'],
			'password' => sha1($post['password']),
			'address' => $post['address'] != "" ? $post['address'] : null ,
			'level' => $post['level']
		);
		$this->db->insert('tbl_users', $params);
	}

	public function del($id){
		$this->db->where('user_id', $id);
		$this->db->delete('tbl_users');
	}

	public function edit($post){
		$params['name'] = $post['fullname'];
		$params['username'] = $post['username'];
		$params['level'] = $post['level'];
		$params['address'] = $post['address'] != "" ? $post['address'] : null;
		if(!empty($post['password'])){
			$params['password'] = sha1($post['password']);
		}
		$this->db->where('user_id', $post['user_id']);
		$this->db->update('tbl_users', $params);
	}

}
