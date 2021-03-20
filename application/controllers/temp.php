public function edit($id){
  if ($this->form_validation->run() == false) {
    $query = $this->car_m->get($id);
    if($query->num_rows() > 0){
      $cars_ob = $query->row();
      $query_category = $this->category_m->get();
      $data = [
        'car' => $cars_ob,
        'category' => $query_category
      ];
      $this->template->load('template', 'data/car/car_edit', $data);
    }else{
      echo "<script> alert('Data tidak ditemukan');</script>";
      echo "<script>window.location='".site_url('car')."';</script>";
    }

  }
}

public function edit(){
  $id = $this->input->post('id_car');
  if ($this->form_validation->run() == false) {
    $query = $this->car_m->get($id)->row();
    $query_category = $this->category_m->get();
    $data = [
      'car'=> $query,
      'category' => $query_category
    ];
    $this->template->load('template', 'data/car/car_edit', $data);
  }else{
    $post = $this->input->post(null, true);
    $this->car_m->edit($post);
    if($this->db->affected_rows() > 0){
      echo "<script>
                   alert('Data Berhasil disimpan');</script>";
    }
    echo "<script>window.location='".site_url('car')."';</script>";
  }

}

// ini yg dipake

if($query->num_rows() > 0){
  $car = $query->row();
  $query_category = $this->category_m->get();
  $data = array(
    'page' => 'edit',
    'row' => $item,
    'category' => $query_category,
  );
  $this->template->load('template', 'data/car/car_edit', $data);
} else{
  echo "<script> alert('Data tidak ditemukan');</script>";
  echo "<script>window.location='".site_url('car')."';</script>";
}
