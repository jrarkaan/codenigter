<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

	// row dipake ketika untuk dipakai array bisa tanpa looping
	// result dipakai ketika dalam looping

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index(){
		check_not_login();
		$data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data', $data); // variabel $data['row'] membawa nilai dari tbl user,
		// sehingga nanti bisa dipakai di user_data untuk diambil rowsnya. var ini bersifat array
	}

	public function _validasi($mode){
		// $this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required'); //
		$this->form_validation->set_rules('fullname', 'Name', 'required'); //
		if($mode == 'add'){
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tbl_users.username]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|trim');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]|trim');
		}else{
			if($mode == 'edit'){
				$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
				if($this->input->post('password')){
					$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|trim');
					$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]|trim');
				}
				if($this->input->post('passconf')){
					$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]|trim');
				}
			}
		}

	}

	public function add(){
		$this->_validasi('add');
		if($this->form_validation->run() == false){
			$this->template->load('template', 'user/user_add');
		} else {
			$post = $this->input->post(null, true);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				echo"<script>alert('data berhasil disimpan')</script>";
			}
			echo "<script>window.location='".site_url('user')."'</script>";
		}
	}

	public function del(){
		$id = $this->input->post('user_id');
		$this->user_m->del($id);
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihpus')</script>";
		}
		echo "<script>window.location='".site_url('user')."'</script>";
	}

	public function edit($id){
		$this->_validasi('edit');
		if($this->form_validation->run() == false){
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template', 'user/user_edit', $data);
			}else{
				echo "<script> alert('Data tidak ditemukan');</script>";
				echo "<script>window.location='".site_url('user')."';</script>";
			}
		}else{
			$post = $this->input->post(null, true);
			$this->user_m->edit($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
                     alert('Data Berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
		}

	}

	function username_check(){
		$post = $this->input->post(null, true);
		$query = $this->db->query("SELECT * FROM tbl_users WHERE username='$post[username]' AND user_id != '$post[user_id]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('username_check', '%s ini sudah dipakai');
			return false;
		}else{
			return true;
		}
	}

}
