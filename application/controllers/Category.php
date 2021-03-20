<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    check_admin();
    check_not_login();
    $this->load->model(array('category_m'));
    $this->load->library('form_validation');
  }

  public function index(){
    $data['row'] = $this->category_m->get();
    $this->template->load('template', 'data/category/category_data', $data);
  }

  public function _validasi($mode){
    if($mode == 'add'){
      $this->form_validation->set_rules('category_name', 'Name of the street' ,'required|min_length[5]|is_unique[tbl_category.name]|trim');
    }else{
      if($mode == 'edit'){
        $this->form_validation->set_rules('category_name', 'Name of the street' ,'required|min_length[5]|callback_namecategory_check');
      }
    }
  }

  public function add(){
    $this->_validasi('add');
    if($this->form_validation->run() == false){
      $this->template->load('template', 'data/category/category_add');
    }else{
      $post = $this->input->post(null, true) ;
      $this->category_m->add($post);
      if($this->db->affected_rows() > 0){
        echo"<script>alert('data berhasil disimpan')</script>";
      }
      echo "<script>window.location='".site_url('category')."'</script>";
    }
  }

  public function del(){
    $id = $this->input->post('id_category');
    $this->category_m->del($id);
    $error = $this->db->error();
		if($error['code'] != 0){
			echo "<script>
            alert('Data tidak berhasil dihapus, sebab data sudah beralasi');</script>";
		}else{
			echo "<script>
            alert('Data Berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('category')."';</script>";
  }

  public function edit($id){
    $this->_validasi('edit');
    if($this->form_validation->run() == false){
      $query = $this->category_m->get($id);
      if($query->num_rows() > 0){
        $data['row'] = $query->row();
        $this->template->load('template', 'data/category/category_edit', $data);
      }else{
        echo "<script> alert('Data tidak ditemukan');</script>";
        echo "<script>window.location='".site_url('category')."';</script>";
      }
    }else{
      $post = $this->input->post(null, true);
      $this->category_m->edit($post);
      if($this->db->affected_rows() > 0){
        echo "<script>
                     alert('Data Berhasil disimpan');</script>";
      }
      echo "<script>window.location='".site_url('category')."';</script>";
    }
  }

  function namecategory_check(){
		$post = $this->input->post(null, true);
		$query = $this->db->query("SELECT * FROM tbl_category WHERE name='$post[category_name]' AND category_id != '$post[id_category]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('namecategory_check', '%s ini sudah dipakai');
			return false;
		}else{
			return true;
		}
	}
}
