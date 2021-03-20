<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){

		check_already_login();
		$this->load->view('login');
	}

	public function process(){

		$post = $this->input->post(null, true); // bawaan dari CInya, true apabila membawa ada nilai post
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				// echo $row->user_id , maka outputnya hasil user_id nya itu sendiri. dan begitu selanjutnya
				$params = array(
					"userid" => $row->user_id,
					"level" => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>alert('Selamat, login berhasil');
						window.location='".site_url('dashboard')."';
					</script>";
			}else{
				echo "<script>alert('Login gagal');
						window.location='".site_url('auth/login')."';
					</script>";
			}
		}
	}

	public function logout(){
		$params = array("userid", "level");
		$this->session->unset_userdata($params);
		redirect("auth/login");
	}

}
