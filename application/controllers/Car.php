<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Car extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    check_admin();
    check_not_login();
    $this->load->model(['car_m', 'category_m']);
    $this->load->library('form_validation');
  }

  public function index(){
    $data['row'] = $this->car_m->get();
    $this->template->load('template', 'data/car/car_data', $data);
  }

  public function _validasi($mode){
		if($mode == 'add'){
      $this->form_validation->set_rules('plat', 'Number of plat' ,'required|min_length[1]|is_unique[tbl_cars.plat]|trim');
      $this->form_validation->set_rules('namamobil', 'Name of the car' ,'required|trim');
      $this->form_validation->set_rules('keterangan', 'Information from name', 'required|trim');
      $this->form_validation->set_rules('category_name', 'Information from name', 'required|trim');
    }else{
			if($mode == 'edit'){
				$this->form_validation->set_rules('plat', 'Number of plat' ,'required|min_length[5]|callback_namecar_check');
        $this->form_validation->set_rules('namamobil', 'Name of the car' ,'required|trim');
        $this->form_validation->set_rules('keterangan', 'Information from name', 'required|trim');
        $this->form_validation->set_rules('category_name', 'Information from name', 'required|trim');
      }
		}
	}

  public function add(){
    $this->_validasi('add');
		if($this->form_validation->run() == false){
      $item = new stdClass();
      $item->category_id = null;
      $query_category= $this->category_m->get();
      $data = [
        'row' => $item,
        'category' => $query_category
      ];
      $this->template->load('template', 'data/car/car_add', $data);
		}else{
			$post = $this->input->post(null, true) ;
			$this->car_m->add($post);
			if($this->db->affected_rows() > 0){
				echo"<script>alert('data berhasil disimpan')</script>";
			}
			echo "<script>window.location='".site_url('car')."'</script>";
		}
  }

  public function del(){
    $id = $this->input->post('id_car');
    $this->car_m->del($id);
    if($this->db->affected_rows() > 0){
      echo"<script>alert('data berhasil dihapus')</script>";
    }
    echo "<script>window.location='".site_url('car')."'</script>";
  }

  public function edit($id) {
    $this->_validasi('edit');
		$query = $this->car_m->get($id);
    if($this->form_validation->run() == false){
      if($query->num_rows() > 0){
        $obj = $query->row();
        $query_category = $this->category_m->get();
        $data = array(
          'row' => $obj,
          'category' => $query_category,
        );
        $this->template->load('template', 'data/car/car_edit', $data);
      }else{
        echo "<script> alert('Data tidak ditemukan');</script>";
        echo "<script>window.location='".site_url('car')."';</script>";
      }
    }else{
      $post = $this->input->post(null, true) ;
      $this->car_m->edit($post);
      if($this->db->affected_rows() > 0){
        echo"<script>alert('data berhasil disimpan')</script>";
      }
      echo "<script>window.location='".site_url('car')."'</script>";
    }
	}

  function namecar_check(){
    $post = $this->input->post(null, true);
    $query = $this->db->query("SELECT * FROM tbl_cars WHERE namamobil='$post[namamobil]' AND id_car != '$post[car_id]'");
    if($query->num_rows() > 0){
      $this->form_validation->set_message('namecar_check', '%s ini sudah dipakai');
      return false;
    }else{
      return true;
    }
  }
}
