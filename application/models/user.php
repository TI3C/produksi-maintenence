<?php

class User extends CI_Model{
	function login ($userName,$password){
		$where=array(
			'userName'=>$userName,
			'password'=>$password
			//'user_type'=>$type
		);
		$this->db->select()->from('tbladmin')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}
	
	/*function register_user($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}
	
	function get_emails(){
		$this->db->select('email')->from('users');
		$query = $this->db->get();
		return $query->result_array();
	}*/
}

?>