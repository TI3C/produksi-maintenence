<?php

	class Users extends CI_Controller{
	
		function login(){
		$this->form_validation->set_rules('userName','userName','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('login');
			}

		$data['error']=0;
		if($_POST){
			$this->load->model('user');
			$username=$this->input->post('userName',true);
			$password=$this->input->post('password',true);
			//$type=$this->input->post('user_type',true);
			$user=$this->user->login($username,$password);
			if(!$user){
			$data['error']=1;
			}else{
				
				$data=array(
					"sedang_login" =>"ya",
					"bagian"=>$user['bagian'],
					"IdAdmin" => $user['IdAdmin'],
					"userName" =>$user['userName']
				);
				$this->session->set_userdata($data);
				if ($user['bagian']=='maintenance'){
				redirect(base_url().'home');
				
				}else{
				
				//$this->session->set_userdata('user_type',$user['user_type']);
				redirect(base_url().'users');
			}
			}
		}
	
	//$this->load->view('header');
	//$this->load->view('login',$data);
	//$this->load->view('footer');
	}
	
	function logout (){
		$this->session->sess_destroy();
		redirect(base_url().'users/login');
	}
}
?>