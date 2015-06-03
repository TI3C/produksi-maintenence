<?php 
class jenis_crud extends CI_Model{
	
	function insert_data(){
		if(isset($_POST['save'])){
			$input_barang=array(
				
				'Kd_Jenis' =>$this->input->post('Kd_Jenis'),
				'Keterangan' =>$this->input->post('Keterangan'),
				'Foto' =>$this->input->post('Foto'),
				'Harga' =>$this->input->post('Harga')
			);
				$save=$this->db->insert('tbljenis',$input_barang);
				redirect(base_url()."crud_jenisprod/new_data/".$input_barang['Kd_Jenis']);
				return $save;
		}
	}
	
	function tampil($id=''){
		//if($this->session->userdata('level')=='user'){
			//$this->db->where('id_peminjam',$id);
			//$this->db->or_where('id_peminjam',"");
		//}
		$this->db->select()->from('tbljenis')->order_by('Kd_Jenis','desc');
		$query=$this->db->get();
		return $query->result_array();
	}
	
	function edit_barang($id,$data){
		$this->db->where('Kd_Jenis',$id);
		$this->db->update('tbljenis',$data);
	}
	
	function delete_barang($id){
		$this->db->where('Kd_Jenis',$id);
		$this->db->delete('tbljenis');
		if($this->session->userdata('sedang_login')=='ya'){
		$this->db->where('Kd_Jenis',$id);
		$this->db->delete('tblregistrasiproduk');
	}

		// $query=$this->db->query("DELETE FROM `tbljenis` WHERE Kd_Jenis='$id'");
		
	}
	
	function get_barang($id){
		// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
		$query=$this->db->get_where('tbljenis', array('Kd_Jenis'=>$id));

		return $query->result_array();
	}
}