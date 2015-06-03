<?php
class alat_crud extends CI_Model{
	
	function insert_data(){
		if(isset($_POST['save'])){
			$input_barang=array(
				'tgl_beli' =>$this->input->post('tgl_beli'),
				'nama' =>$this->input->post('nama'),
				'harga' =>$this->input->post('harga'),
				);
				
				$save=$this->db->insert('tblalat',$input_barang);
				redirect(base_url()."control_alat/new_data");
				return $save;
		}
	}
	

	
	function tampil_alat($id=''){
	
		$this->db->select()->from('tblalat')->order_by('kd_alat','desc');
		$query=$this->db->get();
		return $query->result_array();
	}
	
	
	function edit_barang($id,$data){
		$this->db->where('kd_alat',$id);
		$this->db->update('tblalat',$data);
	}

	
	function delete_barang($id,$data){
		$this->db->where('kd_alat',$id);
		$this->db->delete('tblalat');
	}

	function get_barang($id){
		$query=$this->db->get_where('tblalat', array('kd_alat'=>$id));

		return $query->result_array();
	}
	
}

?>