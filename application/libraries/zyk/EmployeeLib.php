<?php
class EmployeeLib {
	
	public function __construct() {
		$this->CI = & get_instance ();
	}

	public function addRole($cat) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$result = $this->CI->employeemodel->addRole ($cat);
		return $result;
	}
	
	public function getActiveRole() {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getActiveRole();
		return $response;
	}
	public function getActiveRole1($id) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getActiveRole1($id);
		return $response;
	}
	
	public function updateRole($cat) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$result = $this->CI->employeemodel->updateRole ( $cat );
		return $result;
	}
	
	public function getRoleById($cat_id) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getRoleById ( $cat_id );
		return $response;
	}
	
	public function deleteRoleFormByRoleId($roleid) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->deleteRoleFormByRoleId ( $roleid );
		//return $response;
	}
	
	public function getFormAssignByRoleid($cat_id) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getFormAssignByRoleid ( $cat_id );
		return $response;
	}
	
	public function addEmp($cat) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$result = $this->CI->employeemodel->addEmp ($cat);
		return $result;
	}
	
	public function addupload($data){
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$creative = $this->CI->employeemodel->addupload ( $data );
		return $creative;
	}
	
	public function updateupload($data){
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$creative = $this->CI->employeemodel->updateupload ( $data );
		return $creative;
	}
	
	public function getActiveEmp() {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getActiveEmp();
		return $response;
	}
	public function getActiveEmp1() {			
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );			
		$response = $this->CI->employeemodel->getActiveEmp1();			
		return $response;		
	}
	public function getActiveForm() {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getActiveForm();
		return $response;
	}
	
	public function getActiveSubForm() {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getActiveSubForm();
		return $response;
	}
	
	public function getEmpId($category_id) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getEmpId($category_id);
		return $response;
	}
	
	public function updateEmp($cat) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$result = $this->CI->employeemodel->updateEmp  ( $cat );
		return $result;
	}
	
	public function getEmpById($cat_id) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getEmpById ( $cat_id );
		return $response;
	}
	
	public function getUpload() {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getUpload ();
		return $response;
	}
	
	public function addRoleForm($paras) {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->addRoleForm ( $paras );
		return $response;
	}
	
	public function getCustomerList() {
		$this->CI->load->model ( 'employee/Employee_model', 'employeemodel' );
		$response = $this->CI->employeemodel->getCustomerList ();
		return $response;
	}
	
}