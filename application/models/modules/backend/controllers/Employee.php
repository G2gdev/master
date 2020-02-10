<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends MX_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->helper ( 'cookie' );
		$fb_config = parse_ini_file ( APPPATH . "config/APP.ini" );
		$this->load->library('zyk/EmployeeLib', 'employeelib');
		$this->load->library('zyk/UserLoginLib', 'userloginlib');
	//	$this->load->library('zyk/AttributeLib','attributelib');
	}
	
	public function newRole() {
		$forms = $this->employeelib->getActiveForm();
	//	$subforms = $this->employeelib->getActiveSubForm();
		$this->template->set('forms',$forms);
	//	$this->template->set('subforms',$subforms);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
	   // echo $this->template->build ('partials/emplyee/AddCategory');
	    $this->template->build ('partials/employee/AddRole');
	}
	
	public function addRole() {
		$params = array();
		$params['name'] = $this->input->post('name');
		$params['status'] = 1;
		$params['created_datetime'] = date('Y-m-d H:i:s');
		$this->load->library('zyk/EmployeeLib');
	
		$role_id = $this->employeelib->addRole($params);
		/* $form = $this->input->post('form');
		$write = $this->input->post('write');
		$edit = $this->input->post('edit');
		$view = $this->input->post('view');
		
		for($i = 0; $i < count($form); $i++){
			$para = array();
			$para['role_id'] = $role_id;
			$para['form_id'] = $form[$i];
			$para['write'] =(('yes'== $this->input->post('write'.$form[$i]))?"Y":"N");
		    $para['edit'] =(('yes'== $this->input->post('edit'.$form[$i]))?"Y":"N");
		    $para['view'] = (('yes'== $this->input->post('view'.$form[$i]))?"Y":"N");
			$paras[] = $para;
		
		} */
		
		$accessname = $this->input->post('accessname');
		$role_params  = array();
		if(!empty($accessname) && !empty($role_id)){
			for($i = 0; $i < count($accessname); $i ++){
				$para = array();
				$para['role_id'] = $role_id;
				$para['form_id'] = $accessname[$i];
				$para['menuname'] = $this->input->post('menuname'.$accessname[$i]);
				$para['access_type'] = $this->input->post('access_type'.$accessname[$i]);
				/* $para['edit'] =(('1'== $this->input->post('edit'.$accessname[$i]))?"1":"0");
				$para['view'] = (('1'== $this->input->post('view'.$accessname[$i]))?"1":"0");
				$para['no_access'] = (('1'== $this->input->post('noaccess'.$accessname[$i]))?"1":"0"); */
		
				$role_params[] = $para;
				//$i++;
			}
		}
		
		$response = $this->employeelib->addRoleForm($role_params);
		echo json_encode($response);
	}

	public function updateRole() {
		$params = array();
		$params['id'] = $this->input->post('id');
		$params['name'] = $this->input->post('name');
		$item['updated_datetime'] = date('Y-m-d H:i:s');
		$params['status'] = $this->input->post('status');
		$this->load->library('zyk/EmployeeLib');
		
		$response = $this->employeelib->updateRole($params);
		
		$role_id = $params['id'];
		
		$this->employeelib->deleteRoleFormByRoleId($role_id);
		
		$accessname = $this->input->post('accessname');
		$role_params  = array();
		if(!empty($accessname) && !empty($role_id)){
			for($i = 0; $i < count($accessname); $i ++){
				$para = array();
				$para['role_id'] = $role_id;
				$para['form_id'] = $accessname[$i];
				$para['menuname'] = $this->input->post('menuname'.$accessname[$i]);
				$para['access_type'] = $this->input->post('access_type'.$accessname[$i]);
				/* $para['edit'] =(('1'== $this->input->post('edit'.$accessname[$i]))?"1":"0");
				$para['view'] = (('1'== $this->input->post('view'.$accessname[$i]))?"1":"0");
				$para['no_access'] = (('1'== $this->input->post('no_access'.$accessname[$i]))?"1":"0"); */
		
				$role_params[] = $para;
				//$i++;
			}
		}
		$addroleform = $this->employeelib->addRoleForm($role_params);
		
		echo json_encode($response);
	}
	
	public function employee() {
	
	$Roles = $this->employeelib->getActiveRole1();
	$Emps = $this->employeelib->getActiveEmp();
	$upload = $this->employeelib->getUpload();
	
	$this->template->set('Roles',$Roles);
	$this->template->set('Emps',$Emps);
	$this->template->set('uploads',$upload);
	
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('backend')
		->title ( 'Administrator | Employee' )
		->set_partial ( 'header', 'partials/header' )
		->set_partial ( 'leftnav', 'partials/sidebar' )
		->set_partial ( 'footer', 'partials/footer' );
		$this->template->build ('employee/mainemp');
	}
	
	public function editRole() {
		$id=$this->input->post('id');
		$Roles = $this->employeelib->getRoleById($id);
		$forms = $this->employeelib->getFormAssignByRoleid($id);
		$this->template->set('Roles',$Roles);
		$this->template->set('forms',$forms);
	//	print_r($cities);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		// echo $this->template->build ('partials/emplyee/AddCategory');
		$this->template->build ('partials/employee/EditRole');
	}
	
	public function newEmp() {
		$this->load->library('zyk/RestaurantLib');
		$map = array();
		//$map['status'] = 0;
		$garagelist = $this->restaurantlib->getRestaurants($map);
		$this->template->set('garagelist',$garagelist);
		$Roles = $this->employeelib->getActiveRole1();
		$this->template->set('Roles',$Roles);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		// echo $this->template->build ('partials/emplyee/AddCategory');
		$this->template->build ('partials/employee/AddEmployee');
	}
	
	public function addEmp() {
		
		$params = array();
		$params['name'] = $this->input->post('name');
		$params['mobile'] = $this->input->post('mobile');
		$params['emergency_mobile'] = $this->input->post('emobile');
		$params['email'] = $this->input->post('email');
		$params['password'] = $this->input->post('password');
		$params['role_id'] = $this->input->post('role_id');
		$params['garage_id'] = $this->input->post('garage_id');
		//$params['document'] = $this->input->post('document');
		$params['status'] = 1;
		$params['created_datetime'] = date('Y-m-d H:i:s');
		
		$response = $this->employeelib->addEmp($params);
		//$this->userloginlib->sendSignUpEmail ( $params );
		if($response['status'] == 1){
			$files = $_FILES;
			$cpt = 0;
			if(!empty($_FILES ['image'] ['name']))
				$cpt = count( $_FILES ['image']['name'] );
			$data['images'] = array();
			for($i = 0; $i < $cpt; $i++) {
				$_FILES ['user'] ['name'] = $_FILES ['image'] ['name'] [$i];
				$_FILES ['user'] ['type'] = $_FILES ['image'] ['type'] [$i];
				$_FILES ['user'] ['tmp_name'] = $_FILES ['image'] ['tmp_name'] [$i];
				$_FILES ['user'] ['error'] = $_FILES ['image'] ['error'] [$i];
				$_FILES ['user'] ['size'] = $_FILES ['image'] ['size'] [$i];
			
				$config = array ();
				$config ['upload_path'] = 'assets/images/employee/';
				$config ['allowed_types'] = 'gif|jpg|png|PNG|JPEG|pdf|doc|docx';
				$config ['max_size'] = 204800;
				$config ['max_width'] = 2048;
				$config ['max_height'] = 2048;
			
				$this->load->library ( 'upload', $config );
				if ($this->upload->do_upload ( 'user' )) {
					$data3 ['images'][] = array (
							'emp_id' => $response['empid'],
							'documents' => $config ['upload_path'] . '' . $this->upload->data ( 'file_name' )
					);
				}
			}
			$responsedocument = $this->employeelib->addupload($data3);
			
			$this->load->library('zyk/Adminauth');
			$admindata = array();
			$admindata['first_name'] = $this->input->post('name');
			$admindata['email'] = $this->input->post('email');
			$admindata['mobile'] = $this->input->post('mobile');
			$admindata['text_password'] = $this->input->post('password');
			$admindata['password'] = MD5($this->input->post('password'));
			$admindata['user_role'] = $this->input->post('role_id');
			$admindata['garage_id'] = $this->input->post('garage_id');
			$admindata['emp_id'] = $response['empid'];
			$admindata['created_date'] = date('Y-m-d H:i:s');
			$admindata['status'] = 1;
			$admin_id = $this->adminauth->addAdminUser($admindata);
			if(!empty($admin_id)){
				$this->adminauth->sendAdminUserEmail($admindata);
				$this->adminauth->sendAdminUserSMS($admindata);
			}
		}
		
		echo json_encode($response);
	}
	
	public function updateEmp() {
		$params = array();
		$params['id'] = $this->input->post('id');
		$params['name'] = $this->input->post('name');
		$params['mobile'] = $this->input->post('mobile');
		$params['emergency_mobile'] = $this->input->post('emobile');
		$params['email'] = $this->input->post('email');
		$params['password'] = $this->input->post('password');
		$params['role_id'] = $this->input->post('role_id');
		$params['garage_id'] = $this->input->post('garage_id');
		$item['updated_datetime'] = date('Y-m-d H:i:s');
		$params['status'] = $this->input->post('status');
		$this->load->library('zyk/EmployeeLib');
		
		$response = $this->employeelib->updateEmp($params);
		//print_r($response);
		if($response['status'] == 1){
			$files = $_FILES;
			$cpt = 0;
			if(!empty($_FILES ['image'] ['name']))
				$cpt = count( $_FILES ['image']['name'] );
			$data['images'] = array();
			for($i = 0; $i < $cpt; $i++) {
				$_FILES ['user'] ['name'] = $_FILES ['image'] ['name'] [$i];
				$_FILES ['user'] ['type'] = $_FILES ['image'] ['type'] [$i];
				$_FILES ['user'] ['tmp_name'] = $_FILES ['image'] ['tmp_name'] [$i];
				$_FILES ['user'] ['error'] = $_FILES ['image'] ['error'] [$i];
				$_FILES ['user'] ['size'] = $_FILES ['image'] ['size'] [$i];
			
				$config = array ();
				$config ['upload_path'] = 'assets/images/employee/';
				$config ['allowed_types'] = 'gif|jpg|png|PNG|JPEG|pdf|doc|docx';
				$config ['max_size'] = 204800;
				$config ['max_width'] = 2048;
				$config ['max_height'] = 2048;
			
				$this->load->library ( 'upload', $config );
				if ($this->upload->do_upload ( 'user' )) {
					$data3 ['images'][] = array (
							'emp_id' => $params['id'],
							'documents' => $config ['upload_path'] . '' . $this->upload->data ( 'file_name' )
			
					);
				}
			}
			$responsedocument = $this->employeelib->updateupload($data3);
			
			$this->load->library('zyk/Adminauth');
			$admindata = array();
			$admindata['first_name'] = $this->input->post('name');
			$admindata['email'] = $this->input->post('email');
			$admindata['mobile'] = $this->input->post('mobile');
			$admindata['text_password'] = $this->input->post('password');
			$admindata['password'] = MD5($this->input->post('password'));
			$admindata['user_role'] = $this->input->post('role_id');
			$admindata['garage_id'] = $this->input->post('garage_id');
			$admindata['emp_id'] = $params['id'];
			$admindata['status'] = 1;
			//print_r($admindata);
			$admin_id = $this->adminauth->updateadminUser($admindata);
			/*if(!empty($admin_id)){
					$this->adminauth->sendAdminUserEmail($admindata);
					$this->adminauth->sendAdminUserSMS($admindata);
				} */
		}
		echo json_encode($response);
	}
	
	public function editEmp() {
		$this->load->library('zyk/RestaurantLib');
		$map = array();
		//$map['status'] = 0;
		$garagelist = $this->restaurantlib->getRestaurants($map);
		$this->template->set('garagelist',$garagelist);
		$id=$this->input->post('id');
		$Emps = $this->employeelib->getEmpById($id);
		$Roles = $this->employeelib->getActiveRole1();
		$this->template->set('Roles',$Roles);
		$this->template->set('Emps',$Emps);
		//	print_r($cities);
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		// echo $this->template->build ('partials/emplyee/AddCategory');
		$this->template->build ('partials/employee/EditEmployee');
	}
	
	public function customerList() {
		$users = $this->employeelib->getCustomerList();
		$this->template->set('users',$users);
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('backend')
		->title ( 'Administrator | Customer' )
		->set_partial ( 'header', 'partials/header' )
		->set_partial ( 'leftnav', 'partials/sidebar' )
		->set_partial ( 'footer', 'partials/footer' );
		$this->template->build ('customer/CustomerList');
	}
		
}