<?php

class EmployeeModel extends CI_Model
{
	public function InsertEmployee($data){
	return	$this->db->insert('employee',$data);
	}
	public function GetEmployeeDB(){
		$query=$this->db->get('employee');
		return $query->result();
	}
	public function GetEmployeeSpecific($id){

		$query=$this->db->get_where('employee',['id'=>$id]);

		return $query->row();
	}

	public function UpdateSpecific($data, $id){
	return	$this->db->update('employee',$data, ['id'=>$id]);
		
	}
	public function DeleteEmployee($id){
	return	$this->db->delete('employee',['id'=>$id]);
	}

}
