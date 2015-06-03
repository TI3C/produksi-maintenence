<?php

class maintenance extends CI_Controller{
	
	function cek(){
		echo $this->session->userdata('sedang_login');

		$this->session->sess_destroy();
	}

	function new_data(){
		if($this->session->userdata('sedang_login')=='ya'){
		
		$this->load->model('m_crud');

		$data=$this->m_crud->insert_maintenance();
		$this->load->view('form_data',$data);
		
		$gg=array(
					"klik" =>"ya"
				);
				$this->session->set_userdata($gg);
		
		}else{
			redirect(base_url().'users/login');
		}
	}

	function __construct(){

		parent ::__construct();
		$this->load->helper('form');
	}

	function new_maintenance($id){
		if($this->session->userdata('sedang_login')=='ya'){
		//if($this->session->userdata('klik')=='ya'){
		$this->load->model('m_crud');
		$data=$this->m_crud->insert_detail($id);
		$data['det']=$this->m_crud->get_maintenance($id);
		$data["statuspublish_options"] = $this->m_crud->get_all_for_options();
		// $data['ambil_kd']=$this->m_crud->get_dropdown();
		$this->load->view('form_detail',$data);
		$this->load->model('m_crud');
		$data['detail']=$this->m_crud->detail($id);
		$this->load->view('tampil_detail',$data);
		//}
		
		}else{
			//$data['det']=$this->m_crud->get_maintenance($id);
			redirect(base_url().'users/login');
		}
	}
	
	
	function view_data(){
		if($this->session->userdata('sedang_login')=='ya'){
		
		$this->load->model('m_crud');
		$data['tampil']=$this->m_crud->tampil();
		$this->load->view('tampil_data',$data);
		
		}else{
			redirect(base_url().'users/login');
		}
	}

	// function view_detail($id){
	// 	if($this->session->userdata('sedang_login')=='ya'){
		
	// 	$this->load->model('m_crud');
	// 	$data['detail']=$this->m_crud->detail($id);
	// 	$this->load->view('tampil_detail',$data);
		
	// 	}else{
	// 		redirect(base_url().'users/login');
	// 	}
	// }
	
	
	function edit_barang($id){
		if($this->session->userdata('sedang_login')=="ya"){
			
		$this->load->model('m_crud');
		$data['success']=0;
		if($_POST){
			$data_barang=array(
				'Keterangan_Kerusakan'=>$_POST['Keterangan_Kerusakan'],
				'Biaya'=>$_POST['Biaya'],
				'Kd_Alat'=>$_POST['Kd_Alat'],

				//'kd_maintenance'=>$_POST['kd_maintenance']
				//'id_peminjam'=>$_POST['id_peminjam'],
				//'nama_peminjam'=>$_POST['nama_peminjam']
				);
				$this->m_crud->edit_barang($id,$data_barang);
				$data['success']=1;
				// perubahan view_detail ke view_data
				redirect(base_url()."maintenance/view_data/");
		}
		$data['detail']=$this->m_crud->get_barang($id);
		$data["statuspublish_options"] = $this->m_crud->get_all_for_options('Kd_Alat');
		$this->load->view('edit_detail',$data);
		
		}else{
			redirect(base_url().'users/login');
		}
	}

	/*function edit_maintenance($id){
		if($this->session->userdata('sedang_login')=="ya"){
			
		$this->load->model('m_crud');
		$data['success']=0;
		if($_POST){
			$data_barang=array(
				'Tgl_Perbaikan'=>$_POST['Tgl_Perbaikan']
				// 'Biaya'=>$_POST['Biaya']
				//'kd_maintenance'=>$_POST['kd_maintenance']
				//'id_peminjam'=>$_POST['id_peminjam'],
				//'nama_peminjam'=>$_POST['nama_peminjam']
				);
				$this->m_crud->edit_maintenance($id,$data_barang);
				$data['success']=1;
				redirect(base_url()."maintenance/view_data");
		}
		$data['tampil']=$this->m_crud->get_detail($id);
		$this->load->view('edit_maintenance',$data);
		
		}else{
			redirect(base_url().'users/login');
		}
	}*/
	
	
	
	 function delete_barang($id){
	
	 	$this->load->model('m_crud');
	 	$this->m_crud->delete_barang($id,$data);
	 	redirect(base_url()."maintenance/view_data");
	 }
// function delete_barang($id){
	
		// $this->load->model('m_crud');
		// $this->m_crud->delete_barang($id);
		// redirect(base_url()."maintenance/view_detail");
		// $this->load->view('tampil_detail',$id);
	// }

	function delete_maintenance($id){
	
		$this->load->model('m_crud');
		$this->m_crud->delete_maintenance($id);
		redirect(base_url()."maintenance/view_data");
	}
}

	?>
