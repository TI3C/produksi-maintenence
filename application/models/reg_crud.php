<?php 
class reg_crud extends CI_Model{
	
	function insert_data($id){
		if(isset($_POST['save'])){
			$input_barang=array(
				
				'Kd_Jenis' =>$id,
				'Kd_Barang' =>$this->input->post('Kd_Barang'),
				'Kualitas' =>$this->input->post('Kualitas'),
				'Tgl_Registrasi' =>$this->input->post('Tgl_Registrasi')
			);
				$save=$this->db->insert('tblregistrasiproduk',$input_barang);
				redirect(base_url()."crud_regprod/new_data/".$id);
				return $save;
		}
	}
	
	function tampil($id=''){
		//if($this->session->userdata('level')=='user'){
			//$this->db->where('id_peminjam',$id);
			//$this->db->or_where('id_peminjam',"");
		//}
		$this->db->select()->from('tblregistrasiproduk')->order_by('Tgl_Registrasi','desc')->where('Kd_Jenis',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	function edit_barang($id,$data){
		$this->db->where('Kd_Barang',$id);
		$this->db->update('tblregistrasiproduk',$data);
	}
	
	function delete_barang($id){
		$query=$this->db->query("DELETE FROM `tblregistrasiproduk` WHERE Kd_Barang='$id'");
		
	}

	function get_jenis($id){
		// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
		$query=$this->db->get_where('tbljenis', array('Kd_Jenis'=>$id));

		return $query->result_array();
	}
	
	function get_barang($id){
		// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
		$query=$this->db->get_where('tblregistrasiproduk', array('Kd_Barang'=>$id));

		return $query->result_array();
	}
}