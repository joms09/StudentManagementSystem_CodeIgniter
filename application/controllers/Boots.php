<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boots extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('students_model','Students');
		$this->load->model('courses_model','Courses');
	}
	
	public function index(){			
		$header_data['title'] = "Student Management System";		
		$condition = array();
		$condition1 = array();
		$rs = $this->Students->read($condition);
		foreach($rs as $r){
			$info = array(
						'idno' => $r['idno'],
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']					
						);
			$students[] = $info;
		}		
		$rst = $this->Courses->read($condition1);
		foreach($rst as $rs){
			$info = array(
						'id' => $rs['id'],
						'name' => $rs['name'],
						'description' => $rs['description']
						);
			$courses[] = $info;
		}
		$data['students'] = $students;
		$data['courses'] = $courses;
		$this->load->view('include/header',$header_data);
		$this->load->view('students/contents', $data);
		$this->load->view('include/footer');
	}	
	
	public function add_student(){
		$data = array();	
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 			
			$validate = array (
				array('field'=>'idno','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'lname','label'=>'Last Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'fname','label'=>'First Name','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);
			$this->form_validation->set_rules($validate);
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{
				$record = array(
								'idno'=>$_POST['idno'],
								'lname'=>$_POST['lname'],
								'fname'=>$_POST['fname'],
								'mname'=>$_POST['mname'],
								'course'=>$_POST['course'],
								'sex'=>$_POST['sex'],
							);
							
				$insert_id = $this->Students->create($record);
				$data['saved'] = TRUE;
			}
		}
		else{
		}
		$header_data['title'] = "Add New Student";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student', $data);
		$this->load->view('include/footer');	
	}

	// public function modal(){
		// $header_data['title'] = "Add New Student";	
		// $this->load->view('include/header',$header_data);	
		// $this->load->view('students/modal');
		// $this->load->view('include/footer');		
	// }
	
	public function view_students(){
		$header_data['title'] = "Student Management System";		
		$condition = array();
		$rs = $this->Students->read($condition);
		foreach($rs as $r){
			$info = array(
						'idno' => $r['idno'],
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']					
						);
			$students[] = $info;
		}
		$data['students'] = $students;
		$this->load->view('include/header',$header_data);
		$this->load->view('students/view_students', $data);
		$this->load->view('include/footer');

	}
	public function view_courses(){
		$header_data['title'] = "Student Management System";		
		$condition = array();
		$rs = $this->Courses->read($condition);
		foreach($rs as $r){
			$info = array(
						'id' => $r['id'],
						'name' => $r['name'],
						'description' => $r['description']					
						);
			$courses[] = $info;
		}
		$data['courses'] = $courses;
		$this->load->view('include/header',$header_data);
		$this->load->view('students/view_courses', $data);
		$this->load->view('include/footer');

	}
	
	public function new_course(){
		$data = array();	
		if( $_SERVER['REQUEST_METHOD']=='POST'){ 			
			$validate = array (
				array('field'=>'id','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'name','label'=>'Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'description','label'=>'Description','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);
			$this->form_validation->set_rules($validate);
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{
				$record = array(
								'id'=>$_POST['id'],
								'name'=>$_POST['name'],
								'description'=>$_POST['description'],
							);
							
				$insert_id = $this->Courses->create($record);
				$data['saved'] = TRUE;
			}
		}
		else{
		}
		$header_data['title'] = "Add New Course";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_course', $data);
		$this->load->view('include/footer');
	}
	
	public function delete_record($id){
		$students = $this->Students->delete_student(array('idno'=>$id));
		$header_data['title'] = "Delete Student";
		$data['students']=$students;
		$this->load->view('include/header',$header_data);
		if(!empty($_SERVER['HTTP_REFERER'])){
			redirect($_SERVER['HTTP_REFERER']);
		} else {
		}
	}
	
	public function edit_student($id){
		$students = $this->Students->read(array('idno'=>$id));
		$header_data['title'] = "Student edit";
		$data['students'] = $students;
		$this->load->view('students/edit_student',$data);
		$this->load->view('include/header',$header_data);
		if(isset($_POST['submit'])){	
			$student=array('idno'=>$id,'lname'=>$_POST['lname'],'fname'=>$_POST['fname'],'mname'=>$_POST['mname'],'sex'=>$_POST['sex'],'course'=>$_POST['course']);
			$this->Students->update($id, $students);
		}
	}
}
