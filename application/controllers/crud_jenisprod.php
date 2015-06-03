<?php
class crud_jenisprod extends CI_Controller{
	function new_data(){
		//if($this->session->userdata('sedang_login')=="ya"){
		
		$this->load->model('jenis_crud');
		$data=$this->jenis_crud->insert_data();
		$this->load->view('form_jenis',$data);
		$this->load->model('jenis_crud');
		$data['tampil']=$this->jenis_crud->tampil();
		$this->load->view('tampil_jenis',$data);
		
		}
		
	/*function view_data(){
		//if($this->session->userdata('sedang_login')=="ya"){
		
		$this->load->model('m_crud');
		$data['tampil']=$this->m_crud->tampil();
		$this->load->view('tampil',$data);
		
	}*/
	
	function edit_barang($id){
		//if($this->session->userdata('sedang_login')=="ya"){
			
		$this->load->model('jenis_crud');
		$data['success']=0;
		if($_POST){
			$data_barang=array(
				'Keterangan'=>$_POST['Keterangan'],
				'harga'=>$_POST['harga']
				);
				$this->jenis_crud->edit_barang($id,$data_barang);
				$data['success']=1;
				redirect(base_url()."crud_jenisprod/new_data");
		}
		$data['tampil']=$this->jenis_crud->get_barang($id);
		$this->load->view('form_editjenis',$data);
		
		}/*else{
			redirect(base_url().'users/login');
		}
	}*/
	
	function delete_barang($id){
	
		$this->load->model('jenis_crud');
		$this->jenis_crud->delete_barang($id);
		redirect(base_url()."crud_jenisprod/new_data");
	}
}
?>