<?php
class crud_regprod extends CI_Controller{
	function new_data($id){
		//if($this->session->userdata('sedang_login')=="ya"){
		
		$this->load->model('reg_crud');
		$data=$this->reg_crud->insert_data($id);
		$data['jenis']=$this->reg_crud->get_jenis($id);
		$this->load->view('form_regprod',$data);
		$this->load->model('reg_crud');
		$data['tampil']=$this->reg_crud->tampil($id);
		$this->load->view('tampil',$data);
		
		}
		
	/*function view_data(){
		//if($this->session->userdata('sedang_login')=="ya"){
		
		$this->load->model('m_crud');
		$data['tampil']=$this->m_crud->tampil();
		$this->load->view('tampil',$data);
		
	}*/
	
	function edit_barang($id){
		//if($this->session->userdata('sedang_login')=="ya"){
			
		$this->load->model('reg_crud');
		$data['success']=0;
		if($_POST){
			$data_barang=array(
				'Kualitas'=>$_POST['Kualitas'],
				'Tgl_Registrasi'=>$_POST['Tgl_Registrasi']
				);
				$this->reg_crud->edit_barang($id,$data_barang);
				$data['success']=1;
				redirect(base_url()."crud_jenisprod/new_data");
		}
		$data['tampil']=$this->reg_crud->get_barang($id);
		$this->load->view('form_editbarang',$data);
		
		}/*else{
			redirect(base_url().'users/login');
		}
	}*/
	
	function delete_barang($id){
	
		$this->load->model('reg_crud');
		$this->reg_crud->delete_barang($id);
		redirect(base_url()."crud_jenisprod/new_data");
	}
}
?>