<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    check_admin();
    check_not_login();
    $this->load->model(array('customer_m'));
    $this->load->library('form_validation');
  }

  public function index(){
    $data['row'] = $this->customer_m->get();
    $this->template->load('template', 'data/customer/customer_data', $data);
  }

  public function _validasi($mode){
		if($mode == 'add'){
			$this->form_validation->set_rules('namacustomer', 'Name of the street' ,'required|min_length[5]|is_unique[tbl_customers.namacustomer]|trim');
			$this->form_validation->set_rules('keterangan', 'Information from name', 'required|trim');
		}else{
			if($mode == 'edit'){
				$this->form_validation->set_rules('namacustomer', 'Name of the street' ,'required|min_length[5]|callback_namacustomer_check');
				$this->form_validation->set_rules('keterangan', 'Information from name', 'required|trim');
			}
		}
	}

  public function add(){
		$this->_validasi('add');
		if($this->form_validation->run() == false){
			$this->template->load('template', 'data/customer/customer_add');
		}else{
			$post = $this->input->post(null, true) ;
			$this->customer_m->add($post);
			if($this->db->affected_rows() > 0){
				echo"<script>alert('data berhasil disimpan')</script>";
			}
			echo "<script>window.location='".site_url('customer')."'</script>";
		}
	}

  public function del(){
		$id = $this->input->post('id_customer');
		$this->customer_m->del($id);
		if($this->db->affected_rows() > 0){
			echo"<script>alert('data berhasil dihapus')</script>";
		}
		echo "<script>window.location='".site_url('customer')."'</script>";
	}

  public function edit($id){
		$this->_validasi('edit');
		if($this->form_validation->run() == false){
			$query = $this->customer_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template', 'data/customer/customer_edit', $data);
			}else{
				echo "<script> alert('Data tidak ditemukan');</script>";
				echo "<script>window.location='".site_url('customer')."';</script>";
			}
		}else{
			$post = $this->input->post(null, true);
			$this->customer_m->edit($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
                     alert('Data Berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('customer')."';</script>";
		}
	}

  function namacustomer_check(){
		$post = $this->input->post(null, true);
		$query = $this->db->query("SELECT * FROM tbl_customers WHERE namacustomer='$post[namacustomer]' AND id_customer != '$post[customer_id]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('namecustomer_check', '%s ini sudah dipakai');
			return false;
		}else{
			return true;
		}
	}

}
