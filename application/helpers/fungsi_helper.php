<?php
// ketika ingin membuat helper, kita memerlukan _helper dibelakang saat membuat worksheet.
	function check_already_login() {
		$ci =& get_instance();
		$user_session = $ci->session->userdata('userid');
		if($user_session){
			redirect('dashboard');
		}
	}

	function check_not_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('userid');
		if(!$user_session){
			redirect('auth/login');
		}
	}

	function check_admin(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->level != 1){
			redirect('dashboard');
		}
	}
