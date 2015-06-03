<?php
class m_crud extends CI_Model{

	// function get_dropdown(){
	// 	$this->db->from('tblalat');
	// 	$this->db->order_by('kd_alat');
	// 	$result=$this->db->get();
	// 	$return=array();
	// 	if($result->num_rows()>0){
	// 		foreach($result->result_array() as $row){
	// 			$return[$row['id']]=$row['kd_alat'];
	// 		}
	// 	}
	// 	return $return;


	// }

	
	function insert_maintenance(){
		if(isset($_POST['save'])){
			$input_data=array(
			
				//'ID' =>$this->input->post('id_barang'),
				'Kd_Maintenance' =>$this->input->post('Kd_Maintenance'),
				'Tgl_Perbaikan' =>$this->input->post('Tgl_Perbaikan')

				);

				$save=$this->db->insert('tblmaintenance',$input_data);
				redirect(base_url()."maintenance/new_maintenance/".$input_data['Kd_Maintenance']);
				return $save;
		}
	}

	function insert_detail($id){
		if(isset($_POST['save'])){
			$input_barang_detail=array(
			
				//'ID' =>$this->input->post('id_barang'),
				'Kd_Maintenance'=>$id,
				'Kd_DetMaintenance' =>$this->input->post('Kd_DetMaintenance'),
				'Keterangan_Kerusakan' =>$this->input->post('Keterangan_Kerusakan'),
				'Biaya' =>$this->input->post('Biaya'),
				'Kd_Alat' =>$this->input->post('Kd_Alat')

				);

				$save=$this->db->insert('tbldetailmaintenance',$input_barang_detail);
				redirect(base_url()."maintenance/new_maintenance/".$id);
				return $save;
		}
	}
	
	
	function tampil($id=''){
		//if($this->session->userdata('level')=='user'){
			//$this->db->where('id_peminjam',$id);
			//$this->db->or_where('id_peminjam',"");
		//}
		$this->db->select()->from('tblmaintenance')->order_by('Tgl_Perbaikan','desc');
		$query=$this->db->get();
		return $query->result_array();
	}

	function detail($id=''){
		//if($this->session->userdata('level')=='user'){
			// $this->db->where('Kd_Maintenance',$id);
			// $this->db->or_where('Kd_Maintenance',"");
		//}

		$this->db->select()->from('tbldetailmaintenance')->order_by('Kd_DetMaintenance','desc')->where('Kd_Maintenance',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	
	function edit_barang($id,$data){
		$this->db->where('Kd_DetMaintenance',$id);
		// $this->db->where('Kd_Maintenance',$m);
		$this->db->update('tbldetailmaintenance',$data);
	}
	
	function edit_maintenance($id,$data){
		$this->db->where('Kd_Maintenance',$id);
		$this->db->update('tblmaintenance',$data);
	}
	
	function delete_barang($id){
		$this->db->where('Kd_DetMaintenance',$id);
		$this->db->delete('tbldetailmaintenance');
	}
	
	function delete_maintenance($id){

		$this->db->where('Kd_Maintenance',$id);
		$this->db->delete('tblmaintenance');
		if($this->session->userdata('sedang_login')=='ya'){
		$this->db->where('Kd_Maintenance',$id);
		$this->db->delete('tbldetailmaintenance');
		}
	
	}
	
	function get_barang($id){
		// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
		$query=$this->db->get_where('tbldetailmaintenance', array('Kd_DetMaintenance'=>$id));

		return $query->result_array();
	}

	function get_all_for_options() {
		$result = $this->db->get("tblalat");
		$options = array();
		$data[0] = 'SELECT';
		foreach($result->result_array() as $row) {
		$options[$row["kd_alat"]] = $row["kd_alat"];
	}
		return $options;
	}

	// function get_dropdown($id){
	// 	// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
	// 	$query=$this->db->get_where('tblalat', array('kd_alat'=>$id));

	// 	return $query->result_array();
	// }

	function get_maintenance($id){
		// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
		$query=$this->db->get_where('tblmaintenance', array('Kd_Maintenance'=>$id));


		return $query->result_array();
	}

	function get_detail($id){
		// $this->db->select()->from('detail_maintenance')->where(array('kd_detmaintenance'=>$id));
		$query=$this->db->get_where('tbldetailmaintenance', array('Kd_Maintenance'=>$id));

		return $query->result_array();
	}
	
}

?>