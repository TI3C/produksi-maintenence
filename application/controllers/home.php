<?php
class home extends CI_Controller{
	function index(){
		if($this->session->userdata('sedang_login')=="ya"){
			$this->load->view('index');
			}else{
		redirect(base_url().'users/login');
		}
		//parent :: __construct();
		
	}
}
?>
