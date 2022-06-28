<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	public function index()
	{
		$this->load->database();
		//call fetchdatabase model
		//select database 
		$this->load->model('EmployeeModel');
		//fect data
		$employeeData['employee']=$this->EmployeeModel->GetEmployeeDB();

		//Load page sections
		$this->load->view('template/header');
		$this->load->view('Frontend/employee',$employeeData);
		$this->load->view('template/footer');
	}
	public function add()
	{
		$this->load->database();
		$this->load->view('template/header');
		$this->load->view('Frontend/create');
		$this->load->view('template/header');
	}
	public function store()
	{
			//form validation
			$this->form_validation->set_rules('first_name', 'First Name','required');
			$this->form_validation->set_rules('last_name', 'Last Name','required');
			$this->form_validation->set_rules('password', 'Password','required');
			$this->form_validation->set_rules('email', 'Email','required');

			if($this->form_validation->run()==FALSE){
//			echo 'Failed display form again with error info';
			$this->add();

			}
			else{
				//collect data
		$data=[
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
		];
		//add  Datato database
			$this->load->model('EmployeeModel');
			$this->EmployeeModel->InsertEmployee($data);

				//redirect
						$this->index();

			}


//		 var_dump($data);
	}

	//edit controller

	public function Edit($EditLink=''){
		//	Load Database
		$this->load->database();
		//call fetchdatabase model
		//select database 
		$this->load->model('EmployeeModel');
		//fetch specific data
		$data['employee']=$this->EmployeeModel->GetEmployeeSpecific($EditLink);

		//Load page sections
		$this->load->view('template/header');
		$this->load->view('Frontend/edit',$data);
		$this->load->view('template/footer');

	
	}
	public function update($Updateid){
				//form validation
			$this->form_validation->set_rules('first_name', 'First Name','required');
			$this->form_validation->set_rules('last_name', 'Last Name','required');
			$this->form_validation->set_rules('password', 'Password','required');
			$this->form_validation->set_rules('email', 'Email','required');

			if($this->form_validation->run()==FALSE){
//			echo 'Failed display form again with error info';
			$this->Edit($Updateid);
		

			}
			else{
				//collect data
		$data=[
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
		];
		//add  Datato database
		//Load Model
			$this->load->model('EmployeeModel');
			$this->EmployeeModel->UpdateSpecific($data,$Updateid );

				//redirect
				redirect(base_url('employee'));

			}

	
	}

	public function delete($id='')
	{
		$this->load->database();
		//call fetchdatabase model
		//select database 
		$this->load->model('EmployeeModel');
		//fect data
		$employeeData['employee']=$this->EmployeeModel->GetEmployeeDB();

		//Load page sections
		$this->load->view('template/header');
		$this->load->view('Frontend/employee',$employeeData);
		$this->load->view('template/footer');

				//add  Datato database
			$this->load->model('EmployeeModel');
			$this->EmployeeModel->DeleteEmployee($id);

				//redirect
				redirect(base_url('employee'));


	}

}
