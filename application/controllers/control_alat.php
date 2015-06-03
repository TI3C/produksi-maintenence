<?php
class control_alat extends CI_Controller{
	
	function new_data(){	
		$this->load->model('alat_crud');
		$data=$this->alat_crud->insert_data();
	$this->load->view('form_alat',$data);		
		$this->load->model('alat_crud');
		$data['tampil']=$this->alat_crud->tampil_alat();
		$this->load->view('tampil_alat',$data);
		}


	function edit_barang($id){
		$this->load->model('alat_crud');
		$data['success']=0;
		if($_POST){
			$data_barang=array(
				'tgl_beli'=>$_POST['tgl_beli'],
				'nama'=>$_POST['nama'],
				'harga'=>$_POST['harga']
				);
				$this->alat_crud->edit_barang($id,$data_barang);
				$data['success']=1;
				redirect(base_url()."control_alat/new_data");
		}
		$data['tampil']=$this->alat_crud->get_barang($id);
		$this->load->view('edit_alat',$data);
	}
	
	function delete_barang($id){
	
		$this->load->model('alat_crud');
		$this->alat_crud->delete_barang($id,$data);
		redirect(base_url()."control_alat/new_data");
	}
}
?>