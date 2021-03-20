<?php

class Fungsi {

	protected  $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	// fungsi untuk mengelola data-data user yang telah login
	public function user_login(){
		$this->ci->load->model('user_m');
		$user_id = $this->ci->session->userdata('userid');
		$user_data = $this->ci->user_m->get($user_id)->row(); // passing parameter ke model user_m
		return $user_data;
	}

	public function count_car(){
		$this->ci->load->model('car_m');
		return $this->ci->car_m->get()->num_rows();
	}

	public function count_user(){
		$this->ci->load->model('user_m');
		return $this->ci->user_m->get()->num_rows();
	}

	public function count_customer(){
		$this->ci->load->model('customer_m');
		return $this->ci->customer_m->get()->num_rows();
	}

	public function count_category(){
		$this->ci->load->model('category_m');
		return $this->ci->category_m->get()->num_rows();
	}

}
